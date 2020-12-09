import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { CasosAntigosPage } from './casos-antigos.page';

const routes: Routes = [
  {
    path: '',
    component: CasosAntigosPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class CasosAntigosPageRoutingModule {}
