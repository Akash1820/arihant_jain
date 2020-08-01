// Code to manually instntiate CF; alternative to using the cf-form attribute in the form tag.
const dispatcher = new cf.EventDispatcher();
dispatcher.addEventListener(cf.ControlElementEvents.SUBMIT_VALUE, function(event) {

var nodesp2 = document.getElementById("part2-fieldset-yes");
var nodesp2fs_inputs = nodesp2.getElementsByTagName("*");
var nodesp3 = document.getElementById("part3");
var nodesp3_inputs = nodesp3.getElementsByTagName("*");
var nodesp3fs1 = document.getElementById("p3fs1");
var nodesp3fs1_checkboxes = nodesp3fs1.getElementsByTagName("*");
var nodesp3fs2 = document.getElementById("p3fs2");
var nodesp3fs2_inputs = nodesp3fs2.getElementsByTagName("*");
var nodesp4 = document.getElementById("part4");
var nodesp4fs_inputs = nodesp4.getElementsByTagName("*");
	
if (event.detail.type == "RadioButton" && event.detail.referenceTag.value == "no-btn2") {
        
		[...nodesp2fs_inputs].forEach((el) => {
		el.setAttribute("disabled", "");
		});
	
		[...nodesp3_inputs].forEach((ele) => {
		ele.setAttribute("disabled", "");
		});
};

if (event.detail.type == "RadioButton" && event.detail.referenceTag.value == "p3inputs") {
	
	for (var i=0; i<nodesp3fs1_checkboxes.length; i++) {
		for (var j=0; j<nodesp3fs2_inputs.length; j++) {
if(nodesp3fs1_checkboxes[i].getAttribute("checked") == "checked" && nodesp3fs1_checkboxes[i].getAttribute("value") == nodesp3fs2_inputs[j].getAttribute("value")) {
			nodesp3fs2_inputs[j].removeAttribute("disabled");
			} else {
				if(!nodesp3fs2_inputs[j].getAttribute("disable") && !nodesp3fs1_checkboxes[i].getAttribute("checked") == "checked" && !nodesp3fs1_checkboxes[i].getAttribute("value") == nodesp3fs2_inputs[j].getAttribute("value")){
				nodesp3fs2_inputs[j].setAttribute("disabled", "");
				return "No disabled attribute found in " + nodesp3fs2_inputs[j] + "," + " but a disabled attribute has now been set in " + nodesp3fs2_inputs[j] + " .";
			}
			} 
		}
	} 
};

if (event.detail.type == "RadioButton" && event.detail.referenceTag.value == "continue-to-part5") {

		[...nodesp4fs_inputs].forEach((elem) => {
				elem.setAttribute("disabled", "");
				console.log(elem);
			});
		}
		
}, false);

var microphoneInput = null;

var conversationalForm = new cf.ConversationalForm({
		
		formEl: document.getElementById("survey-form"),
		showProgressBar: true,
		eventDispatcher: dispatcher,
		theme: "blue",
		userInterfaceOptions:{
				controlElementsInAnimationDelay: 0,
				robot: {
					robotResponseTime: 0,
					chainedResponseTime: 400
				},
				user:{
					showThinking: true,
					showThumb: true
				}
			},
			microphoneInput: microphoneInput,
			suppressLog: true,
		flowStepCallback: function(dto, success, error){
		
			// Integration code for analytics tracking (eg. Google Analytics, etc.) goes here.
			
			 success();
		 },
		//submitCallback: function(){
			// remove Conversational Form
			//alert("End of form!")
			//console.log("Form submitted...");
			//console.log(conversationalForm.getFormData(true))
			
			// Integration code to submit to database/third party backend (eg. Mailchimp, MongoDB, MySQL, etc.) goes here. Implemented in similar projects in production.
		}
);