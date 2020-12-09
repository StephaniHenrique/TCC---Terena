import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { Info3Page } from './info3.page';

const routes: Routes = [
  {
    path: '',
    component: Info3Page
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class Info3PageRoutingModule {}
