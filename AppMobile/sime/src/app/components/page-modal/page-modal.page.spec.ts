import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { PageModalPage } from './page-modal.page';

describe('PageModalPage', () => {
  let component: PageModalPage;
  let fixture: ComponentFixture<PageModalPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PageModalPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(PageModalPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
