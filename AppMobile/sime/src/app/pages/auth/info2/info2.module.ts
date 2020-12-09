import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { Info2PageRoutingModule } from './info2-routing.module';

import { Info2Page } from './info2.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    ReactiveFormsModule,
    IonicModule,
    Info2PageRoutingModule
  ],
  declarations: [Info2Page]
})
export class Info2PageModule {}
