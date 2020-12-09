import { Component, OnInit, Renderer2, ViewChild } from '@angular/core';
import _ from 'lodash';
import { AnimationController, Animation, Platform, Gesture, GestureController, GestureDetail, NavController, ToastController } from '@ionic/angular';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import { rastreio, HelpedService} from 'src/app/services/helped.service';
import { Router } from '@angular/router';


@Component({
  selector: 'app-detail',
  templateUrl: './detail.page.html',
  styleUrls: ['./detail.page.scss'],
})
export class DetailPage  implements OnInit {

  pubJson
  userJson
  codUsers: string;

  @ViewChild('blocks') blocks: any;
  @ViewChild('background') background: any;

  public initialStep: number = 0;
  private maxTranslate: number;
  private animation: Animation;
  private gesture: Gesture;
  public swiping: boolean = false;

  public slidesOptions: any = {
    slidesPerView: 1.7,
    freeMode: true,
    spaceBetween: 0

  }

  constructor(
    private animationCtrl: AnimationController,
    private platform: Platform,
    private renderer: Renderer2,
    private gestureCtrl: GestureController,
    private navCtrl: NavController,
    private service: HelpedService,
    private router: Router,
    private toastCtrl: ToastController
  ) {
    this.maxTranslate = 1;
  }

  form = new FormGroup({
    rastrearDoacao: new FormControl('', [
      Validators.required,
      Validators.minLength(13),
      Validators.maxLength(13),
      Validators.compose([Validators.required,Validators.pattern('([A-Z]{2})([0-9]{9})([A-Z]{2})')]),
    ]),
  
    codUsers: new FormControl('', []),
    codPublicacao: new FormControl('', []),

  });

  ngOnInit() { 
    const pubTeste = localStorage.getItem('pub');
    this.pubJson = JSON.parse(pubTeste);  

    const userTeste = localStorage.getItem('dataUsers');
    this.userJson = JSON.parse(userTeste);

    this.form.controls['codUsers'].setValue(this.userJson.codUsers);
    this.form.controls['codPublicacao'].setValue(this.pubJson.codPublicacao);
  }

  ngAfterViewInit() {
    this.createAnimation();
  }
toggleBlocks(){
    this.initialStep = this.initialStep === 0 ? this.maxTranslate : 0;

    this.animation.direction(this.initialStep === 0 ? 'reverse' : 'normal').play(); 
    
    this.setHeightDonate();
    this.setMarginWrapper();
  }

  createAnimation(){
    this.animation = this.animationCtrl.create()
    .addElement(this.blocks.nativeElement)
    .duration(300)
    .fromTo('transform', 'translateY(0)', `translateY(${this.maxTranslate}px)`)
  }

  setHeightDonate(value: number = null){
    this.renderer.setStyle(this.blocks.nativeElement, 'height', value ? `${value}px` : this.initialStep === 0 ? '58px' : '340px');
  }

  setMarginWrapper(value: number = null){
    this.renderer.setStyle(this.background.nativeElement, 'margin-bottom', value ? `${value}px` : this.initialStep === 0 ? '-280px' : 'auto');
  }

  voltarPag(){
    this.navCtrl.back();
  }

  async onSubmit(){
    this.service.post(this.form.value).subscribe(
      async() => {
        const toast = await this.toastCtrl.create({ message: 'Doação realizada!', duration: 2000, color: 'dark' });
        this.router.navigateByUrl('/home');
      }
    );

  }

}
