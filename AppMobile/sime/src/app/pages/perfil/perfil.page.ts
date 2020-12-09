import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { AlertController, NavController } from '@ionic/angular';
import { StudentProfile, ProfileService } from 'src/app/services/profile.service';
import { Hero, Casos, StudentProfileDonate, PubInativaService} from 'src/app/services/pub-inativa.service';
import {StudentHappy, HelpedService} from 'src/app/services/helped.service';
import {StudentsService} from 'src/app/services/students.service'



@Component({
  selector: 'app-perfil',
  templateUrl: './perfil.page.html',
  styleUrls: ['./perfil.page.scss'],
})
export class PerfilPage implements OnInit {

  studentsProfile: StudentProfile[];
  studentsProfileDonate: StudentProfileDonate[];
  studentsHappy: StudentHappy[];
  caso: Casos[];
  heros: Hero[];
  userJson 
  idUserProfile
    
  

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
    private alertCtrl: AlertController,
    private service4: StudentsService



    ) { }

  ngOnInit() {
  
    const userTeste = localStorage.getItem('dataUsers');
    this.userJson = JSON.parse(userTeste);    

    this.idUserProfile = this.userJson.codUsers;

    this.service.get(this.idUserProfile).subscribe(response =>{
      this.studentsProfile= response;
      
    });
    
    this.service2.get(this.idUserProfile).subscribe(response =>{
      this.studentsProfileDonate = response;
      console.log(response);
    });

    this.service3.get(this.idUserProfile).subscribe(response =>{
      this.studentsHappy = response;
      console.log(response);
    });
    
    this.service2.getCasos(this.idUserProfile).subscribe(response =>{
      this.caso = response;
    });

    this.service2.getHero(this.idUserProfile).subscribe(response =>{
      this.heros = response;
      console.log(response);
    });
  }

  voltarPag(){
    this.navCtrl.back();
  }

  remove(codPublicacaoUsuario:string){
    this.alertCtrl.create({
      header:"Excluir",
      message:"Você tem certeza que deseja excluir essa publicação?",
      buttons: [
        {
          text: 'Sim',
          handler:() => {
            this.service4.remove(codPublicacaoUsuario).subscribe(() => {
              this.studentsProfile = this.studentsProfile.filter(std => std.codPublicacaoUsuario !== codPublicacaoUsuario);
            })
          }
        },
        { text: 'Não'}
      ]
    }).then(alertEl => alertEl.present());
  }
}

