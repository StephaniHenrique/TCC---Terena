  
import { Component } from '@angular/core';
import { AuthService } from '../auth.service';
import { LoadingController, AlertController, ToastController } from '@ionic/angular';
import { Router } from '@angular/router';
import { FormGroup, FormControl, Validators } from '@angular/forms';

import { StringifyOptions } from 'querystring';



@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage  {

  constructor(
    private authService: AuthService,
    private alertCtrl: AlertController,
    private toastCtrl: ToastController,
    private loadingCtrl: LoadingController,
    private router: Router
  ) { }

  form = new FormGroup({
    username: new FormControl('', [
      Validators.required,
      Validators.compose([Validators.required,Validators.pattern('^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*@[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$')]),
    ]),
    password: new FormControl('', [
      Validators.required,
      Validators.minLength(5),
    ]),
  });

  formLogin = new FormGroup({
    username: new FormControl('', [
      Validators.required,
      Validators.compose([Validators.required,Validators.pattern('^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*@[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$')]),
    ]),
    password: new FormControl('', [
      Validators.required,
      Validators.minLength(5),
    ]),
  });


  async onSubmit() {
    const loading = await this.loadingCtrl.create({ message: 'Logging in ...' });
    await loading.present();

    this.authService.login(this.formLogin.value).subscribe(
      async res => {
        localStorage.setItem('token', res.token);
        localStorage.setItem('dataUsers', JSON.stringify(res.dataUsers));
        loading.dismiss();
        this.router.navigateByUrl('/home');
        console.log(res);
      },
      async () => {
        const alert = await this.alertCtrl.create({ message: 'Login Failed', buttons: ['OK'] });
        await alert.present();
        loading.dismiss();
      }
    );
  }

  async onSubmitRegister() {
    const loading = await this.loadingCtrl.create({ message: 'Registering...' });
    await loading.present();
    this.authService.register(this.form.value).subscribe(
      // If success
      async () => {
        const toast = await this.toastCtrl.create({ message: 'User Created', duration: 2000, color: 'dark' });
        await toast.present();
        loading.dismiss();
        this.form.reset();
        this.router.navigateByUrl('/info');
      },
      // If there is an error
      async () => {
        const alert = await this.alertCtrl.create({ message: 'There is an error', buttons: ['OK'] });
        loading.dismiss();
        await alert.present();
      }
    );
  }  
}
