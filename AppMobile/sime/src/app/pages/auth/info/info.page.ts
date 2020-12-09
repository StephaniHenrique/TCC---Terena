  

import { Component, OnInit } from '@angular/core';
import { NgForm } from '@angular/forms';
import { LoadingController, AlertController, ToastController, ModalController } from '@ionic/angular';
import { Router } from '@angular/router';
import { InfoUserService } from 'src/app/services/info-user.service';
import { PushStudentService, StudentPush} from 'src/app/services/push-student.service';
import { subscribeToObservable } from 'rxjs/internal-compatibility';
import { Student, StudentsService } from 'src/app/services/students.service';



@Component({
  selector: 'app-info',
  templateUrl: './info.page.html',
  styleUrls: ['./info.page.scss'],
})
export class InfoPage implements OnInit {
  studentsPush: StudentPush[];

  constructor(
    private service: InfoUserService,
    private service2: PushStudentService,
    private alertCtrl: AlertController,
    private toastCtrl: ToastController,
    private loadingCtrl: LoadingController,
    private router: Router,
    private modalCtrl: ModalController
  ) { }

  ngOnInit() {
    this.service2.get().subscribe(response =>{
     this.studentsPush = response;
    });
 
  }

  doRefresh(event) {
      setTimeout(() => {
      this.service2.get().subscribe(response =>{
        this.studentsPush = response;
       });
      event.target.complete();
    }, 100);
  }

  

  addPhoto(){
    this.router.navigate(['photo']);
  }

 onSubmit(form: NgForm){
 
    const user = form.value;
    this.service.insertInfo(user).subscribe();
  }
 
  navigateToInfo2(){
    this.router.navigate(['info2']);
  }
}