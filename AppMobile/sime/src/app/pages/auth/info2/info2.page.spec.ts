import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { Info2Page } from './info2.page';

describe('Info2Page', () => {
  let component: Info2Page;
  let fixture: ComponentFixture<Info2Page>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ Info2Page ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(Info2Page);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
