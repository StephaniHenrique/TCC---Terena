import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { CasosAntigosPageRoutingModule } from './casos-antigos-routing.module';

import { CasosAntigosPage } from './casos-antigos.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    CasosAntigosPageRoutingModule
  ],
  declarations: [CasosAntigosPage]
})
export class CasosAntigosPageModule {}
