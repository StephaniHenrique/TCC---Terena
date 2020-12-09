import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { NavController } from '@ionic/angular';
import { StudentProfile, ProfileService } from 'src/app/services/profile.service';
import { Hero, Casos, StudentProfileDonate, PubInativaService} from 'src/app/services/pub-inativa.service';
import {StudentHappy, HelpedService} from 'src/app/services/helped.service';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { ApadrinhamentoService } from 'src/app/services/apadrinhamento.service';

@Component({
  selector: 'app-perfil-user',
  templateUrl: './perfil-user.page.html',
  styleUrls: ['./perfil-user.page.scss'],
})
export class PerfilUserPage implements OnInit {

  studentsProfile: StudentProfile[];
  studentsProfileDonate: StudentProfileDonate[];
  studentsHappy: StudentHappy[];
  caso: Casos[];
  heros: Hero[];
  idUserProfile
  infoUserPerfil
  userJson
  private formGroup: FormGroup;

  public slidesOptions: any = {
    slidesPerView: 3,
    freeMode: true,
    spaceBetween: 4
  }

  public slidesOptions2: any = {
    slidesPerView: 4,
    freeMode: true,
    spaceBetween: 5
  }

  constructor(
    private navCtrl: NavController,
    private router: Router,
    private service: ProfileService,
    private service2: PubInativaService,
    private service3: HelpedService,
    private formBuilder: FormBuilder,
    private service4: ApadrinhamentoService
  ) {
    this.formGroup = this.formBuilder.group({
      codPadrinho: ['', Validators.required],
      codApadrinhado: ['', Validators.required],

    })
   }

  ngOnInit() {
    const userTeste = localStorage.getItem('dataUsers');
    this.userJson = JSON.parse(userTeste);  
    
    const userInfoTeste = localStorage.getItem('usuarioVisu');
    this.infoUserPerfil = JSON.parse(userInfoTeste);

    this.idUserProfile = this.infoUserPerfil.codUsers;

    console.log(this.infoUserPerfil)
    this.service.get(this.idUserProfile).subscribe(response =>{
      this.studentsProfile= response;
      
    });
    
    this.service2.get(this.idUserProfile).subscribe(response =>{
      this.studentsProfileDonate = response;
    });

    this.service3.get(this.idUserProfile).subscribe(response =>{
      this.studentsHappy = response;
    });
    
    this.service2.getCasos(this.idUserProfile).subscribe(response =>{
      this.caso = response;
    });

    this.service2.getHero(this.idUserProfile).subscribe(response =>{
      this.heros = response;
    });

    this.formGroup.controls['codPadrinho'].setValue(this.userJson.codUsers);

  }

  voltarPag(){
    this.navCtrl.back();
  }

  navigateToPerfil() {
    this.router.navigate(['perfil']);
  }

  Apadrinhar(codUsers){
    this.formGroup.controls['codApadrinhado'].setValue(codUsers);
    this.service4.apadrinhar(this.formGroup.value).subscribe();

    this.router.navigate(['home/settings']);    
  }

 

}
