<? include_once('trueratr.html'); ?>      


<blockquote>
   <p class='wow fadeInDown animated'style='text-align: justify;text-justify: inter-word;'> " +obj.description.substring(0,300) + " ......" + " </p>
</blockquote>

<div class='row2'>
<div id='"+reviewDiv +"' style='visibility:hidden'>
<h5> Reviews that Matter</h5>

<div class='reviewrow green darken-1 left-align' id='"+posReview +"'>
</div>
<div class='reviewrow orange darken-4 left-align' id='"+negReview +"'>
</div>
<div class='reviewrow deep-purple accent-1 left-align' id='"+sarcReview +"'>
</div>
</div>
</div>

<div class='row'>
   <div class='center-align'>
      <div class='col s3 card-panel blue darken-3 wow fadeInLeft animated'>
         <div>
            <h4 id= '"+ trueRating +"' style='display:none' style='color:white;font-size:2.5rem;font-weight:400;'>3.3/5.0</h4>
            <div class='preloader-wrapper big active' id='"+trueRatingLoading +"'>
               <div class='spinner-layer spinner-white-only'>
                  <div class='circle-clipper left'>
                     <div class='circle'></div>
                  </div>
                  <div class='gap-patch'>
                     <div class='circle'></div>
                  </div>
                  <div class='circle-clipper right'>
                     <div class='circle'></div>
                  </div>
               </div>
            </div>
            <p>TrueRatr<br>Rating</p>
         </div>
      </div>
      <div class='col s3 card-panel blue accent-1 wow fadeInLeft animated'>
         <div>
            <h4 id= '"+ totalNum +"' style='display:none' style='color:white;font-size:2.5rem;font-weight:400;'>132</h4>
            <div class='preloader-wrapper big active' id='"+totalNumLoading +"'>
               <div class='spinner-layer spinner-white-only'>
                  <div class='circle-clipper left'>
                     <div class='circle'></div>
                  </div>
                  <div class='gap-patch'>
                     <div class='circle'></div>
                  </div>
                  <div class='circle-clipper right'>
                     <div class='circle'></div>
                  </div>
               </div>
            </div>
            <p>Reviews<br>Analyzed</p>
         </div>
      </div>
      <div class='col s3 card-panel blue darken-3 wow fadeInRight animated'>
         <div>
            <h4  id= '"+ positiveNum +"' style='display:none' style='font-color:white;font-size:2.5rem;font-weight:400;'>34%</h4>
            <div class='preloader-wrapper big active' id='"+positiveNumLoading +"'>
               <div class='spinner-layer spinner-white-only'>
                  <div class='circle-clipper left'>
                     <div class='circle'></div>
                  </div>
                  <div class='gap-patch'>
                     <div class='circle'></div>
                  </div>
                  <div class='circle-clipper right'>
                     <div class='circle'></div>
                  </div>
               </div>
            </div>
            <p>Positive<br>Reviews</p>
         </div>
      </div>
      <div class='col s3 card-panel blue accent-1 wow fadeInRight animated'>
         <div>
            <h4 id= '"+ sarcasticNum +"' style='display:none' style='font-color:white;font-size:2.5rem;font-weight:400;'>12</h4>
            <div class='preloader-wrapper big active' id='"+sarcasticNumLoading +"'>
               <div class='spinner-layer spinner-white-only'>
                  <div class='circle-clipper left'>
                     <div class='circle'></div>
                  </div>
                  <div class='gap-patch'>
                     <div class='circle'></div>
                  </div>
                  <div class='circle-clipper right'>
                     <div class='circle'></div>
                  </div>
               </div>
            </div>
            <p>Sarcastic<br>Reviews</p>
         </div>
      </div>
   </div>
</div>