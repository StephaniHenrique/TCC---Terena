import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators, FormControl } from '@angular/forms';
import { PushStudentService, StudentPush} from 'src/app/services/push-student.service';
import { Router } from '@angular/router';

import { SchoolService } from 'src/app/services/school.service';

@Component({
  selector: 'app-info3',
  templateUrl: './info3.page.html',
  styleUrls: ['./info3.page.scss'],
})
export class Info3Page implements OnInit {
  studentsPush: StudentPush[];

  private formGroup: FormGroup;

  constructor(
    private service: SchoolService,
    private formBuilder: FormBuilder,
    private router: Router,
    private service2: PushStudentService
  ) {
    this.formGroup = this.formBuilder.group({
      nivelEscolaridade: ['', Validators.required],
      serieEscolaridade: ['', Validators.required],
      anofimEscolaridade: ['', Validators.required],
      identificarEscolaridade: ['', Validators.required],
      instituicaoEscolaridade: ['', Validators.required],
      codInstituicaoEscolaridade: ['', Validators.required],
    });  
  }

  ngOnInit() {
    this.service2.get().subscribe(response =>{
     this.studentsPush = response;
    });
 
  }

 onSubmit(){
   const school = this.formGroup.value;
   this.service.insertSchool(school).subscribe();
 }

  navigateToLogin(){
    this.router.navigate(['login']);
  }

}
