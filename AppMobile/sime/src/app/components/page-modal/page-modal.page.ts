import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormControl, FormGroup, NgForm, Validators } from '@angular/forms';
import { ModalController } from '@ionic/angular';
import { StudentsService } from 'src/app/services/students.service';
;

@Component({
  selector: 'app-page-modal',
  templateUrl: './page-modal.page.html',
  styleUrls: ['./page-modal.page.scss'],
})
export class PageModalPage implements OnInit {

  public slidesOptions2: any = {
    slidesPerView: 1.6,
    freeMode: true,

  }
  private form: FormGroup;
  userJson

  constructor(
    private modalCtrl: ModalController,
    private formBuilder: FormBuilder,
    private service: StudentsService
  ) {
    this.form = this.formBuilder.group({
      tituloPublicacao: ['', Validators.required],
      descricaoPublicacao: ['', Validators.required],
      codUsers: ['', Validators.required],
    });
  }



  ngOnInit() {
    const userTeste = localStorage.getItem('dataUsers');
    this.userJson = JSON.parse(userTeste);

    this.form.controls['codUsers'].setValue(this.userJson.codUsers);


  }

  closeModal() {
    this.modalCtrl.dismiss();
  }

  onSubmit(form: NgForm) {
    const student = this.form.value;
    this.service.create(student).subscribe(response => {
      this.modalCtrl.dismiss(response);
    });
  }
}
