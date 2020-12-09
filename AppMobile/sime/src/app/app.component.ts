import { Component } from '@angular/core';

import { MenuController, Platform } from '@ionic/angular';
import { SplashScreen } from '@ionic-native/splash-screen/ngx';
import { StatusBar } from '@ionic-native/status-bar/ngx';
import { Storage } from '@ionic/storage';
import { NavController } from '@ionic/angular';
import { Router } from '@angular/router';

@Component({
  selector: 'app-root',
  templateUrl: 'app.component.html',
  styleUrls: ['app.component.scss']
})


export class AppComponent {


  userJson




  constructor(
    private platform: Platform,
    private splashScreen: SplashScreen,
    private statusBar: StatusBar,
    public navCtrl: NavController,
    public router: Router,
    public menuCtrl: MenuController
  ) {
    this.initializeApp();
    this.ngOnInit();
  }

  initializeApp() {
    this.platform.ready().then(() => {
      this.statusBar.styleDefault();
      this.splashScreen.hide();


    });
  }

  ngOnInit() {
    const userTeste = localStorage.getItem('dataUsers');
    this.userJson = JSON.parse(userTeste);

    console.log(this.userJson);
  }

  logout() {
    this.router.navigate(['login']);
    this.menuCtrl.close();
  }
}
