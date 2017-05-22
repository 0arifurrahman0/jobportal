<div class="panel-body">
	
	<div id="academic-res">
		
	</div>
	
	<form class="form-horizontal" id="academic-create" action="/seeker/academic" method="POST">
	
		{{ csrf_field() }}
		
		
		<div class="row">
			<div class="col-md-12">
				<input type="hidden" value="" />
				
				<div class="form-group">
					<label for="eduLevel" class="col-md-4 control-label" title="Required">Level of Education<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<select class="form-control" name="eduLevel">
							<option value="0">Select</option>
							<option value="PSC/5 pass">PSC/5 pass</option>
							<option value="JSC/JDC/8 pass">JSC/JDC/8 pass</option>
							<option value="Secondary/O Level">Secondary/O Level</option>
							<option value="Higher Secondary/A Level">Higher Secondary/A Level</option>
							<option value="Diploma">Diploma</option>
							<option value="Bachelor/Honors">Bachelor/Honors</option>
							<option value="Masters">Masters</option>
							<option value="Doctoral">Doctoral</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="examTitle" class="col-md-4 control-label" title="Required">Exam/Degree Title<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<input list="degreeTitle" class="form-control" value="{{ old('examTitle') }}" name="examTitle"  placeholder="Exam/Degree Title" type="text">
						
						<datalist id="degreeTitle">
							<label for="">select an exam/degree title from this list:</label>
							<select name="" id="">
								<option value="PSC">PSC</option>
								<option value="Ebtedayee (Madrasah)">Ebtedayee (Madrasah)</option>
								<option value="5 Pass">5 Pass</option>
								<option value="JSC">JSC</option>
								<option value="JDC (Madrasah)">JDC (Madrasah)</option>
								<option value="8 Pass">8 Pass</option>
								<option value="SSC">SSC</option>
								<option value="O Level">O Level</option>
								<option value="Dakhil (Madrasah)">Dakhil (Madrasah)</option>
								<option value="SSC (Vocational)">SSC (Vocational)</option>
								<option value="HSC">HSC</option>
								<option value="A Level">A Level</option>
								<option value="Alim (Madrasah)">Alim (Madrasah)</option>
								<option value="HSC (Vocational)">HSC (Vocational)</option>
								<option value="Diploma in Engineering">Diploma in Engineering</option>
								<option value="Diploma in Medical Technology">Diploma in Medical Technology</option>
								<option value="Diploma in Nursing">Diploma in Nursing</option>
								<option value="Diploma in Commerce">Diploma in Commerce</option>
								<option value="Diploma in Business Studies">Diploma in Business Studies</option>
								<option value="Post Graduate Diploma (PGD)">Post Graduate Diploma (PGD)</option>
								<option value="Diploma in Pathology">Diploma in Pathology</option>
								<option value="Diploma (Vocational)">Diploma (Vocational)</option>
								<option value="Bachelor of Science (BSc)">Bachelor of Science (BSc)</option>
								<option value="Bachelor of Arts (BA)">Bachelor of Arts (BA)</option>
								<option value="Bachelor of Commerce (BCom)">Bachelor of Commerce (BCom)</option>
								<option value="Bachelor of Commerce (Pass)">Bachelor of Commerce (Pass)</option>
								<option value="Bachelor of Business Administration (BBA)">Bachelor of Business Administration (BBA)</option>
								<option value="Bachelor of Medicine and Bachelor of Surgery(MBBS)">Bachelor of Medicine and Bachelor of Surgery(MBBS)</option>
								<option value="Bachelor of Dental Surgery (BDS)">Bachelor of Dental Surgery (BDS)</option>
								<option value="Bachelor of Architecture (B.Arch)">Bachelor of Architecture (B.Arch)</option>
								<option value="Bachelor of Pharmacy (B.Pharm)">Bachelor of Pharmacy (B.Pharm)</option>
								<option value="Bachelor of Education (B.Ed)">Bachelor of Education (B.Ed)</option>
								<option value="Bachelor of Physical Education (BPEd)">Bachelor of Physical Education (BPEd)</option>
								<option value="Bachelor of Law (LLB)">Bachelor of Law (LLB)</option>
								<option value="Doctor of Veterinary Medicine (DVM)">Doctor of Veterinary Medicine (DVM)</option>
								<option value="Bachelor of Social Science (BSS)">Bachelor of Social Science (BSS)</option>
								<option value="Bachelor of Fine Arts (B.F.A)">Bachelor of Fine Arts (B.F.A)</option>
								<option value="Bachelor of Business Studies (BBS)">Bachelor of Business Studies (BBS)</option>
								<option value="Bachelor of Computer Application (BCA)">Bachelor of Computer Application (BCA)</option>
								<option value="Fazil (Madrasah)">Fazil (Madrasah)</option>
								<option value="Masters of Science (MSc)">Masters of Science (MSc)</option>
								<option value="Masters of Arts (MA)">Masters of Arts (MA)</option>
								<option value="Masters of Commerce (MCom)">Masters of Commerce (MCom)</option>
								<option value="Masters of Business Administration (MBA)">Masters of Business Administration (MBA)</option>
								<option value="Masters of Architecture (M.Arch)">Masters of Architecture (M.Arch)</option>
								<option value="Masters of Pharmacy (M.Pharm)">Masters of Pharmacy (M.Pharm)</option>
								<option value="Masters of Education (M.Ed)">Masters of Education (M.Ed)</option>
								<option value="Masters of Law (LLM)">Masters of Law (LLM)</option>
								<option value="Masters of Social Science (MSS)">Masters of Social Science (MSS)</option>
								<option value="Masters of Fine Arts (M.F.A)">Masters of Fine Arts (M.F.A)</option>
								<option value="Masters of Philosophy (M.Phil)">Masters of Philosophy (M.Phil)</option>
								<option value="Masters of Business Management (MBM)">Masters of Business Management (MBM)</option>
								<option value="Masters of Development Studies (MDS)">Masters of Development Studies (MDS)</option>
								<option value="Masters of Business Studies (MBS)">Masters of Business Studies (MBS)</option>
								<option value="Masters in Computer Application (MCA)">Masters in Computer Application (MCA)</option>
								<option value="Executive Masters of Business Administration (EMBA)">Executive Masters of Business Administration (EMBA)</option>
								<option value="Fellowship of the College of Physicians and Surgeons (FCPS)">Fellowship of the College of Physicians and Surgeons (FCPS)</option>
								<option value="others" undefined="">Other</option>
							</select>
						</datalist>
	
					</div>
				</div>

				<div class="form-group">
					<label for="majorGroup" class="col-md-4 control-label" title="Required">Concentration/ Major/Group<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<input list="majorSub" class="form-control" value="{{ old('majorGroup')}}" name="majorGroup"  placeholder="Concentration/ Major/Group" type="text">
						
						<datalist id="majorSub">
							<label for="">select a concentration/ major/group Title from this list:</label>
							<select name="" id="">
								<option value="Accounting">Accounting</option>
								<option value="Business Studies">Business Studies</option>
								<option value="Science">Science</option>
								<option value="Arts">Arts</option>
								<option value="History">History</option>
								<option value="Finance & Banking">Finance & Banking</option>
								<option value="Bangla">Bangla</option>
								<option value="English">English</option>
								<option value="Geology">Geology</option>
							</select>
						</datalist>
					</div>
				</div>				
				<div class="form-group">
					<label for="instName" class="col-md-4 control-label" title="Required">Institute Name<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<input class="form-control" value="{{ old('instName')}}" name="instName"  placeholder="Institute Name" type="text">
					</div>
				</div>
				
				<div class="form-group" id="show-marks-field">
					<label for="resultType" class="col-md-4 control-label" title="Required">Result Type<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<select class="form-control" name="resultType" id="result_type">
							<option value="0">Select</option>
							<option value="1">First Division/Class</option>
							<option value="1"}}>Second Division/Class</option>
							<option value="1">Third Division/Class</option>
							<option value="2">Grade</option>
							<option value="Appeared">Appeared</option>
							<option value="Enrolled">Enrolled</option>
							<option value="Awarded">Awarded</option>
							<option value="Do not mention">Do not mention</option>
							<option value="Pass">Pass</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="passYear" class="col-md-4 control-label" title="Required">Year of Passing<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<select class="form-control" name="passYear">
							<option value="0">Select</option>
							<option value="2017" >2017</option>
							<option value="2016" >2016</option>
							<option value="2015" >2015</option>
							<option value="2014" >2014</option>
							<option value="2013" >2013</option>
							<option value="2012" >2012</option>
							<option value="2011" >2011</option>
							<option value="2010" >2010</option>
							<option value="2009" >2009</option>
							<option value="2008" >2008</option>
							<option value="2007" >2007</option>
							<option value="2006" >2006</option>
							<option value="2005" >2005</option>
							<option value="2004" >2004</option>
							<option value="2003" >2003</option>
							<option value="2002" >2002</option>
							<option value="2001" >2001</option>
							<option value="2000" >2000</option>
							<option value="1999" >1999</option>
							<option value="1998" >1998</option>
							<option value="1997" >1997</option>
							<option value="1996" >1996</option>
							<option value="1995" >1995</option>
							<option value="1994" >1994</option>
							<option value="1993" >1993</option>
							<option value="1992" >1992</option>
							<option value="1991" >1991</option>
							<option value="1990" >1990</option>
							<option value="1989" >1989</option>
							<option value="1988" >1988</option>
							<option value="1987" >1987</option>
							<option value="1986" >1986</option>
							<option value="1985" >1985</option>
							<option value="1984" >1984</option>
							<option value="1983" >1983</option>
							<option value="1982" >1982</option>
							<option value="1981" >1981</option>
							<option value="1980" >1980</option>
							<option value="1979" >1979</option>
							<option value="1978" >1978</option>
							<option value="1977" >1977</option>
							<option value="1976" >1976</option>
							<option value="1975" >1975</option>
							<option value="1974" >1974</option>
							<option value="1973" >1973</option>
							<option value="1972" >1972</option>
							<option value="1971" >1971</option>
							<option value="1970" >1970</option>
							<option value="1969" >1969</option>
							<option value="1968" >1968</option>
							<option value="1967" >1967</option>
							<option value="1966" >1966</option>
							<option value="1965" >1965</option>
							<option value="1964" >1964</option>
							<option value="1963" >1963</option>
							<option value="1962" >1962</option>
							<option value="1961" >1961</option>
							<option value="1960" >1960</option>
						</select>
					</div>
				</div>				
				
				<div class="form-group">
					<label for="duration" class="col-md-4 control-label">Duration (Years)</label>
					<div class="col-md-8">
						<input class="form-control" value="{{ old('duration')}}" name="duration" placeholder="Write only years number" type="number">
						<p class="help-block">Example: 2</p>
					</div>
				</div>
	
				
				<div class="form-group">
					<label for="achievment" class="col-md-4 control-label">Achievement</label>
					<div class="col-md-8">
						<input class="form-control" value="{{ old('achievment')}}" name="achievment" placeholder="Achievement" type="text">
					</div>
				</div>		

			</div>

		</div>	

		<div class="form-group">
			<div class="col-md-8 col-md-offset-4">
				<a href="#" class="btn btn-default" id="close-academic">Close</a>
				<button class="btn btn-success" name="seAcademic" type="submit">Save</button>
			</div>
		</div>	

	</form>
	
</div>

<script>
	$(function(){
	/*
	* Academic result type
	*/		
	$("#result_type").change(function(){
		var id = parseInt($('#result_type').val());
		if($.inArray(id, [1]) > -1){

			$('#show-marks').remove();
			$('#show-cgpa').remove();
			$('#show-marks-field').after(
				'<div class="form-group" id="show-marks">' +
				'<label class="col-md-4 control-label" for="marks">Marks(%) : </label>' +
				'<div class="col-md-8">' +
				'<input class="form-control" name="marks" id="marks" placeholder="Marks" type="text">' +
				'</div>' +
				'</div>'
			);
		}else{
			$('#show-marks').remove();
		}
	});

	$("#result_type").change(function(){
		var id = parseInt($('#result_type').val());
		if(id == 2){
			$('#show-marks').remove();
			$('#show-cgpa').remove();
			$('#show-marks-field').after(
				'<div class="form-group" id="show-cgpa">' +
				'<label class="col-md-4 control-label" for="cgpa">CGPA</label>' +
				'<div class="col-md-3">' +
				'<input class="form-control" name="cgpa" id="cgpa" placeholder="CGPA" type="text">' +
				'</div>' +
				'<label class="col-md-2 control-label" for="scale">Out of</label>' +
				'<div class="col-md-3">' +
				'<input class="form-control" name="scale" id="scale" placeholder="Scale" type="text">' +
				'</div>' +
				'</div>'
			);
		}else{
			$('#show-cgpa').remove();
		}
	});
		
	});

	/*
	* Academic Create Form 
	*/	
	$('#academic-create').on('submit', function(e){
				
		e.preventDefault(e);
		
		$('#academic-res').html('');
		
		var method = $(this).attr('method');
		
		var url = $(this).attr('action');
		
		var data = $(this).serialize();
		
		$.ajax({
			
			method: method,
			url: url,
			data: data,
			dataType: 'json',
			cache: false
			
		}).done(function(res){

			$('#academic-res').html(res.success);

			
		}).fail(function(res){
			
			if( res.status === 422 ) {

			$errors = res.responseJSON;

			errorsHtml = '<div class="alert alert-danger"><ol>';

			$.each( $errors, function( key, value ) {
				errorsHtml += '<li>' + value[0] + '</li>'; 
			});
			errorsHtml += '</ol></div>';
				
			$( '#academic-res' ).html( errorsHtml );
			}			
			
			
		});
		
	});
	
	/*
	* Close Personal Update Form 
	*/
	$('#close-academic').click(function() {
		
		location.reload();
		
	});	
	

</script>