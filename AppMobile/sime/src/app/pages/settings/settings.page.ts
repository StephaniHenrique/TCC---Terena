import { Component, OnInit } from '@angular/core';
import { FormGroup } from '@angular/forms';
import { Router } from '@angular/router';
import { AlertController } from '@ionic/angular';
import {ApadrinhamentoService,StudentAp } from 'src/app/services/apadrinhamento.service';

@Component({
  selector: 'app-settings',
  templateUrl: './settings.page.html',
  styleUrls: ['./settings.page.scss'],
})
export class SettingsPage implements OnInit {

  studentsAp: StudentAp[];
  userJson
  idUserProfile
  private formGroup: FormGroup;

  constructor(
    private router: Router,
    private service: ApadrinhamentoService,
    private alertCtrl: AlertController
  ) { }

  ngOnInit() {
    const userTeste = localStorage.getItem('dataUsers');
    this.userJson = JSON.parse(userTeste);

    this.idUserProfile = this.userJson.codUsers;

    this.service.pushStudents(this.idUserProfile).subscribe(response=>{
      this.studentsAp = response;
    });
  }

  navigateToPerfil(){
    this.router.navigate(['perfil']);
  }

  navigateToPendencies(){
    this.router.navigate(['pendencias']);
  }

  doRefresh(event) {
    setTimeout(() => {
      this.service.pushStudents(this.idUserProfile).subscribe(response=>{
        this.studentsAp = response;
      });
      event.target.complete();
    }, 100);
  }

  remove(codApadrinhamento:string){
    this.alertCtrl.create({
      header:"Excluir",
      message:"Você tem certeza que deseja abandonar este estudante?",
      buttons: [
        {
          text: 'Sim',
          handler:() => {
            this.service.removeApadrinhado(codApadrinhamento).subscribe(() => {
              this.studentsAp = this.studentsAp.filter(std => std.codApadrinhamento !== codApadrinhamento);
            })
          }
        },
        { text: 'Não'}
      ]
    }).then(alertEl => alertEl.present());
  }
}
