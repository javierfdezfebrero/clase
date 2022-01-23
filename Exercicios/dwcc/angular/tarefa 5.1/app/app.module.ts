import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { Apartado1Component } from './apartado1/apartado1.component';
import { Apartado2Component } from './apartado2/apartado2.component';
import { Apartado3Component } from './apartado3/apartado3.component';

@NgModule({
  declarations: [
    AppComponent,
    Apartado1Component,
    Apartado2Component,
    Apartado3Component
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
