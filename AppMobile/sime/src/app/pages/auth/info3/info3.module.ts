import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { Info3PageRoutingModule } from './info3-routing.module';

import { Info3Page } from './info3.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    ReactiveFormsModule,
    IonicModule,
    Info3PageRoutingModule
  ],
  declarations: [Info3Page]
})
export class Info3PageModule {}
