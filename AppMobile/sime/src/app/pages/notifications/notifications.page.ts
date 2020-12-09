import { Component, Input, OnInit, Renderer2, ViewChild } from '@angular/core';
import { HttpHeaders, HttpClient } from '@angular/common/http';
import { Student, StudentsService } from 'src/app/services/students.service';
import { Router } from '@angular/router';
import { AnimationController, Animation, Platform, Gesture, GestureController, GestureDetail } from '@ionic/angular';
import { FormGroup, FormControl, FormBuilder, Validators } from '@angular/forms';
import { FavoritesService, StudentFavorite } from 'src/app/services/favorites.service'
import { OtherUsersService } from 'src/app/services/other-users.service';
import _ from 'lodash';

@Component({
  selector: 'app-notifications',
  templateUrl: './notifications.page.html',
  styleUrls: ['./notifications.page.scss'],
})

export class NotificationsPage implements OnInit {
  @ViewChild('blocks') blocks: any;
  @ViewChild('background') background: any;
  @ViewChild('swipeDown') swipeDown: any;
  @ViewChild('pageHeader') pageHeader: any;

  students: Student[];
  userJson
  idUserProfile
  PubDetails
  OtherUser
  private formGroup: FormGroup;
  queryText: string;


  /*public initialStep: number = 0;
  private maxTranslate: number;
  private animation: Animation;
  private gesture: Gesture;
  public swiping: boolean = false;*/

  constructor(
    private http: HttpClient,
    private service: StudentsService,
    private router: Router,
    private animationCtrl: AnimationController,
    private platform: Platform,
    private renderer: Renderer2,
    private gestureCtrl: GestureController,
    private service2: FavoritesService,
    private formBuilder: FormBuilder,
    private service3: OtherUsersService
  ) {
    //this.maxTranslate = this.platform.height() - 620;

    this.formGroup = this.formBuilder.group({
      codUsers: ['', Validators.required],
      codPublicacao: ['', Validators.required],

    });

    this.queryText = '';
  }

  ngOnInit() {
    const userTeste = localStorage.getItem('dataUsers');
    this.userJson = JSON.parse(userTeste);

    localStorage.setItem('infoPub', JSON.stringify(this.students));

    this.idUserProfile = this.userJson.codUsers;

    this.formGroup.controls['codUsers'].setValue(this.idUserProfile);
    console.log(this.formGroup.value);



    this.service.getAll(this.idUserProfile).subscribe(response => {
      this.students = response;
    });

    


  }

  filterPubs(){
 
  }


  Detalhes(codPublicacaoUsuario: string) {
    this.service.get(codPublicacaoUsuario).subscribe(response => {
      this.PubDetails = response;
      localStorage.setItem('pub', JSON.stringify(this.PubDetails));

      this.router.navigate(['detail'])

    });
  }

  doRefresh(event) {
    setTimeout(() => {
      this.service.getAll(this.idUserProfile).subscribe(response => {
        this.students = response;
      });
      event.target.complete();
    }, 100);
  }

  /*ngAfterViewInit() {
    this.createAnimation();
    this.detectSwipe();
  }

  detectSwipe() {
    this.gesture = this.gestureCtrl.create({
      el: this.swipeDown.el,
      gestureName: 'swipe-down',
      threshold: 0,
      onMove: ev => this.onMove(ev),
      onEnd: ev => this.onEnd(ev)
    }, true);

    this.gesture.enable(true);
  }

  onMove(ev: GestureDetail) {
    if (!this.swiping) {
      this.animation.direction('normal').progressStart(true);

      this.swiping = true;
    }

    const step: number = this.getStep(ev);

    this.animation.progressStep(step);
    this.setBackgroundOpacity(step);

    this.setBackgroundHeight((step + 1) * 306);
  }

  onEnd(ev: GestureDetail) {
    if (!this.swiping) return;

    this.gesture.enable(false);

    const step: number = this.getStep(ev);
    const shouldComplete: boolean = step > 0.5;

    this.animation.progressEnd(shouldComplete ? 1 : 0, step);

    this.initialStep = shouldComplete ? this.maxTranslate : 0;

    this.setBackgroundOpacity();
    this.setBackgroundHeight();

    this.swiping = false;
  }

  getStep(ev: GestureDetail): number {
    const delta: number = this.initialStep + ev.deltaY;

    return delta / this.maxTranslate;
  }

  toggleBlocks() {
    this.initialStep = this.initialStep === 0 ? this.maxTranslate : 0;

    this.gesture.enable(false);

    this.animation.direction(this.initialStep === 0 ? 'reverse' : 'normal').play();

    this.setBackgroundOpacity();

    this.setBackgroundHeight();
  }

  createAnimation() {
    this.animation = this.animationCtrl.create()
      .addElement(this.blocks.nativeElement)
      .duration(300)
      .fromTo('transform', 'translateY(0)', `translateY(${this.maxTranslate}px)`)
      .onFinish(() => this.gesture.enable(true));
  }

  setBackgroundOpacity(value: number = null) {
    this.renderer.setStyle(this.background.nativeElement, 'opacity', value ? value : this.initialStep === 0 ? '0' : '1');
  }

  setBackgroundHeight(value: number = null) {
    this.renderer.setStyle(this.pageHeader.nativeElement, 'height', value ? `${value}px` : this.initialStep === 0 ? '306px' : '510px');
  }*/


  navigateToPerfil() {
    this.router.navigate(['perfil']);
  }

  navigateToPendencies() {
    this.router.navigate(['pendencias']);
  }

  favorite(codPublicacao: string) {
    this.formGroup.controls['codPublicacao'].setValue(codPublicacao);
    console.log(this.formGroup.value);

    this.service2.favorite(this.formGroup.value).subscribe();


  }

  DetalhesUser(codUsers: string){
    this.service3.infoUserGet(codUsers).subscribe(response=>{
      this.OtherUser = response;
      localStorage.setItem('usuarioVisu', JSON.stringify(this.OtherUser));

      this.router.navigate(['perfil-user'])
    });
  }

}
