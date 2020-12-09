import { Component, OnInit } from '@angular/core';
import { HttpHeaders, HttpClient } from '@angular/common/http';
import { Student, StudentsService } from 'src/app/services/students.service';
import { AlertController, ModalController } from '@ionic/angular';
import { PageModalPage } from 'src/app/components/page-modal/page-modal.page';

@Component({
  selector: 'app-home',
  templateUrl: './home.page.html',
  styleUrls: ['./home.page.scss'],
})
export class HomePage implements OnInit {
  students: Student[];
  constructor(
      private http: HttpClient, 
      private service: StudentsService,
      private alertCtrl: AlertController,
      private modalCtrl: ModalController
  ) { }

  ngOnInit() {
  }

  addStudent(){
    this.modalCtrl.create({
      component: PageModalPage
    })
    .then(modal => {
      modal.present();
      return modal.onDidDismiss();
    })
    .then(({data, role}) => {
      if (role === 'created'){
        this.students.push(data);
      }
    });
  }
}
