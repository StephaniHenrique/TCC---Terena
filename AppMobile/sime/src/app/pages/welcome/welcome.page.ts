import { Component, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { IonSlides } from '@ionic/angular';

@Component({
  selector: 'app-welcome',
  templateUrl: './welcome.page.html',
  styleUrls: ['./welcome.page.scss'],
})
export class WelcomePage implements OnInit {
  public onboardSlides = [];
  @ViewChild('mainSlides', {static: true}) slides: IonSlides;

  constructor(
    private router: Router
  ) { }

  ngOnInit() {
    this.onboardSlides = [
      { 
        title:"Realize doações",
        img: "introUm",
        desc: "Aqui no Simetria, você pode realizar doações para alunos necessitados e ser um herói!"
      },
      { 
        title:"Publique suas necessidades",
        img: "introDois",
        desc: "Publique sobre o objeto que necessita e esperar um herói aparecer!"
      },
      { 
        title:"Apadrinhe um aluno",
        img: "introTres",
        desc: "Apadrinhe e ajude um usuário de forma continua em suas necessidades!"
      },
    ];
  }

  public goBack(){
    this.slides.slidePrev();
  }

  public skipBtn(){
    this.router.navigate(['login']);
  }

  public goNext(){
    this.slides.slideNext();
  }

}
