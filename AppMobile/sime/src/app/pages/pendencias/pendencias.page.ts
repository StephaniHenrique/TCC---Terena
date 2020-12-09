import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { NavController } from '@ionic/angular';
import { pendenciasUser, NotificationsService} from 'src/app/services/notifications.service';
import {ApadrinhamentoService,StudentAp } from 'src/app/services/apadrinhamento.service';
@Component({
  selector: 'app-pendencias',
  templateUrl: './pendencias.page.html',
  styleUrls: ['./pendencias.page.scss'],
})
export class PendenciasPage implements OnInit {

  userJson

  pendenciaUser: pendenciasUser[];
  
  constructor(
    private navCtrl: NavController,
    private router: Router,
    private service: NotificationsService,
    ) { }

  ngOnInit() {
    const userTeste = localStorage.getItem('dataUsers');
    this.userJson = JSON.parse(userTeste);

   
    this.service.getNew(this.userJson.codUsers).subscribe(response =>{
      this.pendenciaUser = response;
      console.log(this.pendenciaUser)
    });  
  }

  voltarPag(){
    this.navCtrl.back();
  }

  navigateToPerfil(){
    this.router.navigate(['perfil']);
  }

}
