import { Component, OnInit } from '@angular/core';
import _ from 'lodash';
import { Router } from '@angular/router';
import { ServidorService } from '../../providers/servidor.service';
import { HttpClient } from '@angular/common/http';
import { CasosAntigosService, Student} from 'src/app/services/casos-antigos.service';

@Component({
  selector: 'app-messages',
  templateUrl: './messages.page.html',
  styleUrls: ['./messages.page.scss'],
})
export class MessagesPage implements OnInit {
  userJson
  idUserProfile
  students: Student[]

  public slidesOptions: any = {
    slidesPerView: 1.8,
    freeMode: true,
    spaceBetween: 8,
  }

  public slidesOptions2: any = {
    slidesPerView: 4,
    freeMode: true,
    spaceBetween: 10,
  }

  public slidesOptions3: any = {
    freeMode: true,
    spaceBetween: 10,
  }

  public slidesOptionsBanner: any = {
    freeMode: true,
    spaceBetween: 10
  }

  constructor(
    private router: Router,
    public servidor: ServidorService,
    private service: CasosAntigosService
  ) { } 

  ngOnInit() {
    const userTeste = localStorage.getItem('dataUsers');
    this.userJson = JSON.parse(userTeste);

    this.idUserProfile = this.userJson.codUsers;

    this.service.getCasosAntigos(this.idUserProfile).subscribe(response =>{
      this.students = response;
    })

  }

  navigateToPerfil(){
    this.router.navigate(['perfil']);
  }

  navigateToPendencies(){
    this.router.navigate(['pendencias']);
  }

}
