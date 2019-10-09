@extends('layouts.template')

@section('content')
    <div class="container">
	<div class="row"> 
	<div class="col-sm-9 "  >
      <!-- <h1 style="text-align: center">Submission</h1> -->
      <!-- <hr class="divider  my-4">  -->
      <div class="row">
				
				<div class="col-sm-12 text-center"  >
				  
				
                        @if (Auth::guest()) <a class="btn btn-warning readmore" href="/login"> Online Abstact Submissioin </a> <br><br> @endif
				<hr>
				<a class="btn btn-warning readmore" href="{{asset('docs/Abstract_template.docx')}}" download="Abstract_template.docx"> Abstract Template<br> <font size="1">(Conference) </font></a>
				<a class="btn btn-warning readmore" href="{{asset('docs/full_paper_template.docx')}}" download="full_paper_template.docx"> Full  Paper Template<br> <font size="1">(Conference) </font></a>
							
				</div>		 
						
                    <div class="col-sm-12 "  >
                        <br>
                        <br>
						<h3 class="text-center" style="    background: #d8d8d8;
    padding: 10px;
    color: #2bad6d;
    border-radius: 8px;
    font-size: 20px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;">
                            <span class="heading-three">
                              
                                <span>Call for Abstracts</span></span>
                            </h3>
                            <div align="justify"><font color="#333333"><br>Abstracts are invited in the form of oral and poster presentations. All those desirous of participating and/or presenting in the conference are requested to complete the online abstract submission. Authors are requested to send one-page abstract in the prescribed format on the website. 
<br><br>
	<ul class="list-group">
		<li class="list-group-item">Abstracts should be in a single page A4 format and Arial Narrow font</li>
		<li class="list-group-item">    The title should be in bold with font size 12 followed by authors name(s) in the next line, with the presenting author name underlined</li>
		<li class="list-group-item">      List the authors with their first name followed by their last name in Arial Narrow 12-point font and centered</li>
		<li class="list-group-item">      Author affiliations should be written in Arial Narrow 12-point font, italics in the subsequent line(s) with central alignment </li>
		<li class="list-group-item">      Author affiliation should be followed by the Email ID of the presenting and corresponding author </li>
		<li class="list-group-item">       The abstract contents in single spaced Arial Narrow font should be limited to <strong><u>500 words</u></strong> (including title, author names, affiliations, abstract body and references). The abstract body should be single spaced  font size 11. </li>
		<li class="list-group-item">        References relevant to the abstract if any should be placed at the bottom. References should not be cited in the text</li>
		<li class="list-group-item">       The format may be obtained from the template Abstract and can have maximum one figure/scheme/flow chart of 1.5”x 6.0” or 3”x3” which will be equivalent to <u><strong>120 words</strong></u>.</li>
		<li class="list-group-item">       Do not include paragraph headings such as Aims, Materials &amp; Methods, Results, etc. </li>
		<li class="list-group-item">       Submit abstract using the given template as doc/word file only. No pdf files will be accepted</li>
	</ul>
<br>
       <!-- <strong>Those authors who wish to compete for MAHE "Young Scientist Award" and Bajpai-Saha "Student Award" need to submit extended abstract with a minimum of 2000 words containing all results and images with key references. Only those who satisfy these criteria will be considered for awards</strong> -->


                    </font>    </div> 



				
				
						
                   </div> 
                   <div class="col-sm-12 "  >
                        <br>
                        <br>
                       <h3 class="text-center" style="    background: #d8d8d8;
                           padding: 10px;
                           color: #2bad6d;
                           border-radius: 8px;
                           font-size: 20px;
                           border-bottom-left-radius: 0;
                           border-bottom-right-radius: 0;">
                                                   <span class="heading-three">
                                                     
                                                       <span>Poster Session</span>
                                                   </span></h3>
                                                   {{-- <div align="justify"><font color="#333333"><br>The poster session is proposed to highlight the activities in various areas of biomaterials, therapeutics, bioengineering, and regenerative medicine. Best poster awards will be presented to students participating in the poster session. The poster display space of 3 ft (w) x 4 ft (h) will be available for the presenters. A committee comprising of eminent scientists will make its decision on the best posters.
                       
                       
                       </font></div> --}}
                                             
                           <div align="justify"><font color="#333333"><br>The poster session is proposed to highlight the activities in various areas of conference theme. Best poster awards will be presented to students participating in the poster session. The poster display space of 80 cm (w) x 100 cm (h) will be available for the presenters. A committee comprising of eminent scientists will make its decision on the best posters.
                       </font></div>
                                                   
                                               
                       
                       
                       </div>

                   <div class="col-sm-12 "  >
                        <br>
                        <br>
                       <h3 class="text-center" style="    background: #d8d8d8;
                           padding: 10px;
                           color: #2bad6d;
                           border-radius: 8px;
                           font-size: 20px;
                           border-bottom-left-radius: 0;
                           border-bottom-right-radius: 0;">
                                                   <span class="heading-three">
                                                     
                                                       <span>Full Paper</span>
                                                   </span></h3>
                        <div align="justify"><font color="#333333"><br>The article's submitted as full paper will e reviewed and the selected peoples will be 
                            published by national and international publishers(Indexed and database including Web of Science and Scopus).
                        </font><br>
                        <br><b>1. Author guidelines of AIP. Please visit</b> <a href="https://aip.scitation.org/apc/authors/preppapers">link</a> 
                        <br>
                        <a class="btn btn-warning readmore btn-sm" href="{{asset('docs/AIP_Template.dotx')}}" download="AIP_Template.dotx"> AIP Template </a>
                        <br>
                        <br><b>2. Author Guidelines of IJMR</b>
                        <br>
                        <a class="btn btn-warning readmore btn-sm" href="{{asset('docs/IJMR_author_style_guide_&_conditions.pdf')}}" download="IJMR_author_style_guide_&_conditions.pdf"> Style Guide for Authors </a>
        
                    
                    </div>
                   </div>



 
 
					
					
                </div>
                </div>
				<div class="col-lg-3 align-self-baseline">
				<div class="text-center">
				<h4>Important dates</h4>
				<hr class="divider ">  			
			</div>
			<div class="table-responsive" style="padding-top:20px;">
				<table class="table  imp_date">
					<tr><td><b style="color: #26ad6d;">Abstract submission	</b><br><font size="3"><i> Up to 1<sup>st</sup>  November, 2019</i></font>  </td></tr>
					<tr><td><b style="color: #26ad6d;">Paper acceptance intimation	</b><br><font size="3"><i> 10<sup>th</sup>  November, 2019</i></font>  </td></tr>
					<tr><td><b style="color: #26ad6d;">Full papers submission	</b><br><font size="3"><i> Up to 30<sup>th</sup> November, 2019</i></font>  </td></tr>
					<tr><td><b style="color: #26ad6d;">Early bird registration	</b><br><font size="3"><i> Up to 15<sup>th</sup> November, 2019</i></font>  </td></tr>
					<tr><td><b style="color: #26ad6d;">Conference days	</b><br><font size="3"><i> 12<sup>th</sup> to 14<sup>th</sup>  December, 2019</i></font>  </td></tr>
				</table>
			</div>
         </div>
                </div>
        
    </div>
@endsection