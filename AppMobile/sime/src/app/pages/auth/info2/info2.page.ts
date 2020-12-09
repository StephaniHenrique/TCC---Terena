import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { PushStudentService, StudentPush} from 'src/app/services/push-student.service';
import { EnderecoService } from 'src/app/services/endereco.service';

@Component({
  selector: 'app-info2',
  templateUrl: './info2.page.html',
  styleUrls: ['./info2.page.scss'],
})
export class Info2Page implements OnInit{

  studentsPush: StudentPush[];
  private formGroup: FormGroup;

  constructor(
    private serviceUser: EnderecoService,
    private service: EnderecoService,
    private formBuilder: FormBuilder,
    private router: Router,
    private service2: PushStudentService
  ) {
    this.formGroup = this.formBuilder.group({
      logUsers: ['', Validators.required],
      numUsers: ['', Validators.required],
      complementoUsers: ['', Validators.required],
      bairroUsers: ['', Validators.required],
      ufUsers: ['', Validators.required],
      cidadeUsers: ['', Validators.required],
      cepUsers: ['', Validators.required],
      municipioUsers: ['', Validators.required],
    });

  }

  ngOnInit() {
    this.service2.get().subscribe(response =>{
     this.studentsPush = response;
    });
 
  }

  consultarCep(cepUsers: string) {
    console.log(cepUsers);
    cepUsers = cepUsers.replace('.', '');
    cepUsers = cepUsers.replace('-', '');
    console.log(cepUsers);
    this.service.findByEndereco(cepUsers)
      .subscribe(response => {
        console.log(response);
        this.populaDadosForm(response);
      },
        error => { })
  }

  populaDadosForm(dados) {
    console.log('dados.logradouro');
    console.log(dados);
    this.formGroup.controls['logUsers'].setValue(dados.logradouro);
    this.formGroup.controls['bairroUsers'].setValue(dados.bairro);
    this.formGroup.controls['cidadeUsers'].setValue(dados.localidade);
    this.formGroup.controls['ufUsers'].setValue(dados.uf);

  }

  onSubmit(){
 
    const user = this.formGroup.value;
    this.service.insertEndereco(user).subscribe();
  }

  navigateToInfo3(){
    this.router.navigate(['info3']);
  }

}
