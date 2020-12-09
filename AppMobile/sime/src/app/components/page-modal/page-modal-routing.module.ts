import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { PageModalPage } from './page-modal.page';

const routes: Routes = [
  {
    path: '',
    component: PageModalPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class PageModalPageRoutingModule {}
