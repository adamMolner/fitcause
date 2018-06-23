import clock from "clock";
import document from "document";
import { preferences } from "user-settings";
import * as util from "../common/utils";
// Update the clock every minute
clock.granularity = "seconds";

// Get a handle on the <text> element
const myHoursHand = document.getElementById("myHours");
const myMinutesHand = document.getElementById("myMinutes");
const mySecondsHand = document.getElementById("mySeconds");


function updateClock() {
    let date = new Date();
    let hours = date.getHours()/12;
    let minutes = date.getMinutes();
    let seconds = date.getSeconds(); 
   
    myHoursHand.groupTransform.rotate.angle = ((360 * hours)/12) + ((360 * minutes)/(12 * 60));
    myMinutesHand.groupTransform.rotate.angle = ((360 * seconds)/ 60);
    mySecondsHand.groupTransform.rotate.angle = (360 * minutes)/60; 
}

clock.ontick = () => updateClock();

