import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { Info2Page } from './info2.page';

const routes: Routes = [
  {
    path: '',
    component: Info2Page
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class Info2PageRoutingModule {}
