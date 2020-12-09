import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { PageModalPageRoutingModule } from './page-modal-routing.module';

import { PageModalPage } from './page-modal.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    ReactiveFormsModule,
    IonicModule,
    PageModalPageRoutingModule
  ],
  declarations: [PageModalPage]
})
export class PageModalPageModule {}
