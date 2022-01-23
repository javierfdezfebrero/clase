import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-apartado1',
  templateUrl: './apartado1.component.html',
  styleUrls: ['./apartado1.component.css']
})
export class Apartado1Component implements OnInit {

  constructor( ) { }

  visible=false;


  cambioDiv() {
      if (this.visible) {
        return this.visible=false;
      }else{
        return this.visible=true;;
      }
  }

  ngOnInit(): void {
  }

}
