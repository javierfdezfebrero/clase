import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Apartado1Component } from './apartado1.component';

describe('Apartado1Component', () => {
  let component: Apartado1Component;
  let fixture: ComponentFixture<Apartado1Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ Apartado1Component ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(Apartado1Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
