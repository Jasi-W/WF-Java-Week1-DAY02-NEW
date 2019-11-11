
import { Component, OnInit } from '@angular/core';
import { TravelService } from "../shared/travel.service";

@Component({
 selector: 'app-travel-list',
 templateUrl: './travel-list.component.html',
 styleUrls: ['./travel-list.component.css']
})

export class TravelListComponent implements OnInit {
	 travelArray =[];

 constructor(private travelService: TravelService) { }

 ngOnInit() {
	 this.travelService.getTravel().subscribe(
		 (list) => {
			 this.travelArray = list.map( (item) => {
				return {
					$key : item.key,
					...item.payload.val()
				}
			})
		 });
  }
}


