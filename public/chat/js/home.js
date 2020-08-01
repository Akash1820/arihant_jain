function caller()
        {
            window.open('form.html', 'formpopup', 'width=500,height=600,resizeable,scrollbars');         
            
        }   
       
    const typedTextSpan = document.querySelector(".typed-text");
    const cursorSpan = document.querySelector(".cursor");
    
    const textArray = ["Official Crime Reporting Portal", "Sarvasya Rakshan"];
    const typingDelay = 200;
    const erasingDelay = 100;
    const newTextDelay = 2000; // Delay between current and next text
    let textArrayIndex = 0;
    let charIndex = 0;
    
    function type() {
      if (charIndex < textArray[textArrayIndex].length) {
        if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
        typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
        charIndex++;
        setTimeout(type, typingDelay);
      } 
      else {
        cursorSpan.classList.remove("typing");
          setTimeout(erase, newTextDelay);
      }
    }
    
    function erase() {
        if (charIndex > 0) {
        if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
        typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
        charIndex--;
        setTimeout(erase, erasingDelay);
      } 
      else {
        cursorSpan.classList.remove("typing");
        textArrayIndex++;
        if(textArrayIndex>=textArray.length) textArrayIndex=0;
        setTimeout(type, typingDelay + 1100);
      }
    }
    
    document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
      if(textArray.length) setTimeout(type, newTextDelay + 250);
    });
    
    var botui = new BotUI('my-botui-app');

// Start Bot
// First Messages
botui.message.bot({
    content: 'Hi there! 👋',
    loading: true,
    delay: 500,
}).then(function () {
    return botui.message.bot({
        loading: true,
        delay: 500,
        content: "I'm here to assist you through Sarvasya Rakshan!",
    });
}).then(function () {
    return botui.message.bot({
        loading: true,
        delay: 700,
        content: "Tell me what you're here for?",
    });
}).then(function () {
  return botui.action.button({
        delay: 500,
        loading: true,
        addMessage: true,
        action: [{
            text: 'Reporting Cyber Crime',
            value: 'cyber'
        }, {
            text: 'Reporting Crime',
            value: 'crime'
        }, 
	
		{
            text: 'Track Your Complaints',
            value: 'track'
        }, {
            text: 'Helpline Assistance',
            value: 'help'
        },
		{
            text: 'Admin Support',
            value: 'admin'
        }
		
		]
    })
}).then(function (res) {
  if (res.value == 'cyber') {
     return botui.message.bot({
                loading: true,
                delay: 500,
                content: "Ok. You Can Easily Report Any Cyber Crime Here Anonymously As Well As With Your Details For Later Tracking.",
            })
            .then(function () {
                return botui.message.bot({
                              loading: true,
                              delay: 500,
                              content: "After Successful Reporting Under 'Report & Track', We Will Also Provide You The Complaint Copy To Track Your Complaints Later.",
                          });
              })	
		.then(function () {
  return botui.message.bot({
                loading: true,
                delay: 500,
                content: "For Anonymous Reporting, [Click Here](rnt2.php) & For Report And Track [Click Here](rnt.php)",
            });
})
.then(function () {
    return botui.message.bot({
                  loading: true,
                  delay: 500,
                  content: "And For Detailed Information Regarding Cyber Crimes & Their Safety Tips [Click Here]()",
              });
  })	
}




   if (res.value == 'crime') {
     return botui.message.bot({
                loading: true,
                delay: 500,
                content: "Ok. You Can Easily Report Any Kind Of Personal, Financial or Statuory Crimes Anonymously As Well As With Your Details Here.",
            })
            .then(function () {
                return botui.message.bot({
                              loading: true,
                              delay: 500,
                              content: "For Anonymous Reporting, [Click Here](rnt2.php) & For Report And Track [Click Here](rnt.php)",
                          });
              })	
		.then(function () {
  return botui.message.bot({
                loading: true,
                delay: 500,
                content: "And For Detailed Information Regarding These Crimes & Their Safety Tips [Click Here]()",
            });
})	
}

if (res.value == 'track') {
    return botui.message.bot({
               loading: true,
               delay: 500,
               content: "Great. Welcome Back User!",
           })
           .then(function () {
               return botui.message.bot({
                             loading: true,
                             delay: 500,
                             content: "To Track Your Complaint, Click On The 'Track Your Complaints' Button, And Provide The Complaint ID And Respective Complainant Name For Current Status",
                         });
             })	
       .then(function () {
 return botui.message.bot({
               loading: true,
               delay: 500,
               content: "If No Action Is Taken On Your Complaint, Kindly Take Helpline Assistance [Here]() Or Raise Ticket For Admin Support [Here](contact.php)",
           });
})	
}
if (res.value == 'help') {
    return botui.message.bot({
               loading: true,
               delay: 500,
               content: "Hi User,",
           })
           .then(function () {
               return botui.message.bot({
                             loading: true,
                             delay: 500,
                             content: "If You Need Assistance From Your Police Station, Please Find Our PS Contact List [Here](help.php).",
                         });
             })	
       .then(function () {
 return botui.message.bot({
               loading: true,
               delay: 500,
               content: "If No Action Is Taken On Your Complaint, Kindly Raise Ticket For Admin Support [Here](contact.php)",
           });
})	
}

if (res.value == 'admin') {
    return botui.message.bot({
               loading: true,
               delay: 500,
               content: "Hi User,",
           })
           .then(function () {
               return botui.message.bot({
                             loading: true,
                             delay: 500,
                             content: "If You Need Assistance From Your Police Station, Please Find Our PS Contact List [Here](help.php).",
                         });
             })	
       .then(function () {
 return botui.message.bot({
               loading: true,
               delay: 500,
               content: "If No Action Is Taken On Your Complaint, Kindly Raise Ticket For Admin Support [Here](contact.php)",
           });
})	
}

})

.then(function () {
  return botui.message.bot({
                loading: true,
                delay: 2500,
                content: "If You Need Anything Else From Me, Please Select From The Below Options ",
            });
})

.then(function () {
  return botui.action.button({
        delay: 500,
        loading: true,
        addMessage: true,
        action: [{
            text: 'Reporting Cyber Crime',
            value: 'cyber'
        }, {
            text: 'Reporting Crime',
            value: 'crime'
        }, {
            text: 'Track Your Complaints',
            value: 'track'
        }, {
            text: 'Helpline Assistance',
            value: 'help'
        },
		{
            text: 'Admin Support',
            value: 'admin'
        }
		
		]
    })
}).then(function (res) {
    if (res.value == 'cyber') {
       return botui.message.bot({
                  loading: true,
                  delay: 500,
                  content: "Ok. You Can Easily Report Any Cyber Crime Here Anonymously As Well As With Your Details For Later Tracking.",
              })
              .then(function () {
                  return botui.message.bot({
                                loading: true,
                                delay: 500,
                                content: "After Successful Reporting Under 'Report & Track', We Will Also Provide You The Complaint Copy To Track Your Complaints Later.",
                            });
                })	
          .then(function () {
    return botui.message.bot({
                  loading: true,
                  delay: 500,
                  content: "For Anonymous Reporting, [Click Here](rnt2.php) & For Report And Track [Click Here](rnt.php)",
              });
  })
  .then(function () {
      return botui.message.bot({
                    loading: true,
                    delay: 500,
                    content: "And For Detailed Information Regarding Cyber Crimes & Their Safety Tips [Click Here]()",
                });
    })	
  }
  
  
  
  
     if (res.value == 'crime') {
       return botui.message.bot({
                  loading: true,
                  delay: 500,
                  content: "Ok. You Can Easily Report Any Kind Of Personal, Financial or Statuory Crimes Anonymously As Well As With Your Details Here.",
              })
              .then(function () {
                  return botui.message.bot({
                                loading: true,
                                delay: 500,
                                content: "For Anonymous Reporting, [Click Here](rnt2.php) & For Report And Track [Click Here](rnt.php)",
                            });
                })	
          .then(function () {
    return botui.message.bot({
                  loading: true,
                  delay: 500,
                  content: "And For Detailed Information Regarding These Crimes & Their Safety Tips [Click Here]()",
              });
  })	
  }
  
  if (res.value == 'track') {
      return botui.message.bot({
                 loading: true,
                 delay: 500,
                 content: "Great. Welcome Back User!",
             })
             .then(function () {
                 return botui.message.bot({
                               loading: true,
                               delay: 500,
                               content: "To Track Your Complaint, Click On The 'Track Your Complaints' Button, And Provide The Complaint ID And Respective Complainant Name For Current Status",
                           });
               })	
         .then(function () {
   return botui.message.bot({
                 loading: true,
                 delay: 500,
                 content: "If No Action Is Taken On Your Complaint, Kindly Take Helpline Assistance [Here]() Or Raise Ticket For Admin Support [Here](contact.php)",
             });
  })	
  }
  if (res.value == 'help') {
      return botui.message.bot({
                 loading: true,
                 delay: 500,
                 content: "Hi User,",
             })
             .then(function () {
                 return botui.message.bot({
                               loading: true,
                               delay: 500,
                               content: "If You Need Assistance From Your Police Station, Please Find Our PS Contact List [Here](help.php).",
                           });
               })	
         .then(function () {
   return botui.message.bot({
                 loading: true,
                 delay: 500,
                 content: "If No Action Is Taken On Your Complaint, Kindly Raise Ticket For Admin Support [Here](contact.php)",
             });
  })	
  }
  
  if (res.value == 'admin') {
      return botui.message.bot({
                 loading: true,
                 delay: 500,
                 content: "Hi User,",
             })
             .then(function () {
                 return botui.message.bot({
                               loading: true,
                               delay: 500,
                               content: "If You Need Assistance From Your Police Station, Please Find Our PS Contact List [Here](help.php).",
                           });
               })	
         .then(function () {
   return botui.message.bot({
                 loading: true,
                 delay: 500,
                 content: "If No Action Is Taken On Your Complaint, Kindly Raise Ticket For Admin Support [Here](contact.php)",
             });
  })	
  }
  
  })
  
  .then(function () {
    return botui.message.bot({
                  loading: true,
                  delay: 2500,
                  content: "If You Need Anything Else From Me, Please Select From The Below Options ",
              });
  })
  
  .then(function () {
    return botui.action.button({
          delay: 500,
          loading: true,
          addMessage: true,
          action: [{
              text: 'Reporting Cyber Crime',
              value: 'cyber'
          }, {
              text: 'Reporting Crime',
              value: 'crime'
          }, {
              text: 'Track Your Complaints',
              value: 'track'
          }, {
              text: 'Helpline Assistance',
              value: 'help'
          },
          {
              text: 'Admin Support',
              value: 'admin'
          }
          
          ]
      })
  })