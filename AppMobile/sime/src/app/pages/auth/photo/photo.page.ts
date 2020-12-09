import { Component, OnInit } from '@angular/core';
import { NavController } from '@ionic/angular';
import { Router } from '@angular/router';
import { NgForm } from '@angular/forms';
import { PushStudentService, StudentPush} from 'src/app/services/push-student.service';

@Component({
  selector: 'app-photo',
  templateUrl: './photo.page.html',
  styleUrls: ['./photo.page.scss'],
})
export class PhotoPage implements OnInit {


  public slidesOptions2: any = {
    slidesPerView: 2.4,
    freeMode: true,
    
  }
  constructor(
    private navCtrl: NavController,
    private service: PushStudentService,
    private router: Router
  ) { }

  ngOnInit() {
  }

  voltarPag(){
    this.navCtrl.back();
  }

  onSubmit(form: NgForm){
    const user = form.value;
    this.service.insertPhoto(user).subscribe();

  }

  navigateToInfo(){
    this.router.navigate(['info']);
  }
}
