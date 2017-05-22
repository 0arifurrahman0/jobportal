<div class="panel-body personal-update">
	
	<div id="sepersonal-res">
		
	</div>
	
	<form class="form-horizontal" id="personal-update" action="/seeker/personal" method="POST">
	
		{{ csrf_field() }}
		
		
		<div class="row">
			<div class="col-md-12">
				<input type="hidden" value="{{ $profile->user_id }}" />
				
				<div class="form-group">
					<label for="eduLevel" class="col-md-4 control-label" title="Required">Level of Education<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<select class="form-control" name="eduLevel">
							<option>Select</option>
							<option value="PSC/5 pass" {{ ($profile->eduLevel == 'PSC/5 pass') ? 'selected' : '' }} >PSC/5 pass</option>
							<option value="JSC/JDC/8 pass" {{ ($profile->eduLevel == 'JSC/JDC/8 pass') ? 'selected' : '' }}>JSC/JDC/8 pass</option>
							<option value="Secondary/O Level" {{ ($profile->eduLevel == 'Secondary/O Level') ? 'selected' : '' }}>Secondary/O Level</option>
							<option value="Higher Secondary/A Level" {{ ($profile->eduLevel == 'Higher Secondary/A Level') ? 'selected' : '' }}>Higher Secondary/A Level</option>
							<option value="Diploma" {{ ($profile->eduLevel == 'Diploma') ? 'selected' : '' }}>Diploma</option>
							<option value="Bachelor/Honors" {{ ($profile->eduLevel == 'Bachelor/Honors') ? 'selected' : '' }}>Bachelor/Honors</option>
							<option value="Masters" {{ ($profile->eduLevel == 'Masters') ? 'selected' : '' }}>Masters</option>
							<option value="Doctoral" {{ ($profile->eduLevel == 'Doctoral') ? 'selected' : '' }}>Doctoral</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="seName" class="col-md-4 control-label" title="Required">Exam/Degree Title<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<input list="degreeTitle" class="form-control" value="{{ $profile->seName or old('seName')}}" name="seName"  placeholder="Exam/Degree Title" type="text">
						
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
					<label for="seFName" class="col-md-4 control-label" title="Required">Concentration/ Major/Group</label>
					<div class="col-md-8">
						<input list="majorSub" class="form-control" value="{{ $profile->seFName or old('seFName')}}" name="seFName"  placeholder="Concentration/ Major/Group" type="text">
						
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
					<label for="seFName" class="col-md-4 control-label" title="Required">Institute Name</label>
					<div class="col-md-8">
						<input class="form-control" value="{{ $profile->seFName or old('seFName')}}" name="seFName"  placeholder="Institute Name" type="text">
					</div>
				</div>
				
				<div class="form-group" id="show-marks-field">
					<label for="eduLevel" class="col-md-4 control-label" title="Required">Result Type<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<select class="form-control" name="eduLevel" id="result_type">
							<option>Select</option>
							<option value="1" {{ ($profile->eduLevel == 'First Division/Class') ? 'selected' : '' }} >First Division/Class</option>
							<option value="2" {{ ($profile->eduLevel == 'Second Division/Class') ? 'selected' : '' }}>Second Division/Class</option>
							<option value="3" {{ ($profile->eduLevel == 'Third Division/Class') ? 'selected' : '' }}>Third Division/Class</option>
							<option value="4" {{ ($profile->eduLevel == 'Grade') ? 'selected' : '' }}>Grade</option>
							<option value="Appeared" {{ ($profile->eduLevel == 'Appeared') ? 'selected' : '' }}>Appeared</option>
							<option value="Enrolled" {{ ($profile->eduLevel == 'Enrolled') ? 'selected' : '' }}>Enrolled</option>
							<option value="Awarded" {{ ($profile->eduLevel == 'Awarded') ? 'selected' : '' }}>Awarded</option>
							<option value="Do not mention" {{ ($profile->eduLevel == 'Do not mention') ? 'selected' : '' }}>Do not mention</option>
							<option value="Pass" {{ ($profile->eduLevel == 'Pass') ? 'selected' : '' }}>Pass</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="eduLevel" class="col-md-4 control-label" title="Required">Year of Passing<span class="required">&#42;</span></label>
					<div class="col-md-8">
						<select class="form-control" name="eduLevel">
							<option>Select</option>
							<option value="2017" {{ ($profile->eduLevel == '2017') ? 'selected' : '' }} >2017</option>
							<option value="2016" {{ ($profile->eduLevel == '2016') ? 'selected' : '' }} >2016</option>
							<option value="2015" {{ ($profile->eduLevel == '2015') ? 'selected' : '' }} >2015</option>
							<option value="2014" {{ ($profile->eduLevel == '2014') ? 'selected' : '' }} >2014</option>
							<option value="2013" {{ ($profile->eduLevel == '2013') ? 'selected' : '' }} >2013</option>
							<option value="2012" {{ ($profile->eduLevel == '2012') ? 'selected' : '' }} >2012</option>
							<option value="2011" {{ ($profile->eduLevel == '2011') ? 'selected' : '' }} >2011</option>
							<option value="2010" {{ ($profile->eduLevel == '2010') ? 'selected' : '' }} >2010</option>
							<option value="2009" {{ ($profile->eduLevel == '2009') ? 'selected' : '' }} >2009</option>
							<option value="2008" {{ ($profile->eduLevel == '2008') ? 'selected' : '' }} >2008</option>
							<option value="2007" {{ ($profile->eduLevel == '2007') ? 'selected' : '' }} >2007</option>
							<option value="2006" {{ ($profile->eduLevel == '2006') ? 'selected' : '' }} >2006</option>
							<option value="2005" {{ ($profile->eduLevel == '2005') ? 'selected' : '' }} >2005</option>
							<option value="2004" {{ ($profile->eduLevel == '2004') ? 'selected' : '' }} >2004</option>
							<option value="2003" {{ ($profile->eduLevel == '2003') ? 'selected' : '' }} >2003</option>
							<option value="2002" {{ ($profile->eduLevel == '2002') ? 'selected' : '' }} >2002</option>
							<option value="2001" {{ ($profile->eduLevel == '2001') ? 'selected' : '' }} >2001</option>
							<option value="2000" {{ ($profile->eduLevel == '2000') ? 'selected' : '' }} >2000</option>
							<option value="1999" {{ ($profile->eduLevel == '1999') ? 'selected' : '' }} >1999</option>
							<option value="1998" {{ ($profile->eduLevel == '1998') ? 'selected' : '' }} >1998</option>
							<option value="1997" {{ ($profile->eduLevel == '1997') ? 'selected' : '' }} >1997</option>
							<option value="1996" {{ ($profile->eduLevel == '1996') ? 'selected' : '' }} >1996</option>
							<option value="1995" {{ ($profile->eduLevel == '1995') ? 'selected' : '' }} >1995</option>
							<option value="1994" {{ ($profile->eduLevel == '1994') ? 'selected' : '' }} >1994</option>
							<option value="1993" {{ ($profile->eduLevel == '1993') ? 'selected' : '' }} >1993</option>
							<option value="1992" {{ ($profile->eduLevel == '1992') ? 'selected' : '' }} >1992</option>
							<option value="1991" {{ ($profile->eduLevel == '1991') ? 'selected' : '' }} >1991</option>
							<option value="1990" {{ ($profile->eduLevel == '1990') ? 'selected' : '' }} >1990</option>
							<option value="1989" {{ ($profile->eduLevel == '1989') ? 'selected' : '' }} >1989</option>
							<option value="1988" {{ ($profile->eduLevel == '1988') ? 'selected' : '' }} >1988</option>
							<option value="1987" {{ ($profile->eduLevel == '1987') ? 'selected' : '' }} >1987</option>
							<option value="1986" {{ ($profile->eduLevel == '1986') ? 'selected' : '' }} >1986</option>
							<option value="1985" {{ ($profile->eduLevel == '1985') ? 'selected' : '' }} >1985</option>
							<option value="1984" {{ ($profile->eduLevel == '1984') ? 'selected' : '' }} >1984</option>
							<option value="1983" {{ ($profile->eduLevel == '1983') ? 'selected' : '' }} >1983</option>
							<option value="1982" {{ ($profile->eduLevel == '1982') ? 'selected' : '' }} >1982</option>
							<option value="1981" {{ ($profile->eduLevel == '1981') ? 'selected' : '' }} >1981</option>
							<option value="1980" {{ ($profile->eduLevel == '1980') ? 'selected' : '' }} >1980</option>
						</select>
					</div>
				</div>				
				
				<div class="form-group">
					<label for="seMName" class="col-md-4 control-label">Duration (Years)</label>
					<div class="col-md-8">
						<input class="form-control" value="{{ $profile->seMName or old('seMName')}}" name="seMName" placeholder="Write only years number" type="text">
					</div>
				</div>
	
				
				<div class="form-group">
					<label for="seReligion" class="col-md-4 control-label">Achievement</label>
					<div class="col-md-8">
						<input class="form-control" value="{{ $profile->seReligion or old('seReligion')}}" name="seReligion" placeholder="Achievement" type="text">
					</div>
				</div>		

			</div>

		</div>	

		<div class="form-group">
			<div class="col-md-10 col-md-offset-2">
				<button class="btn btn-default" id="persoanl-btn">Close</button>
				<button class="btn btn-success" name="sePersonal" type="submit">Update</button>
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
		if($.inArray(id, [1, 2, 3]) > -1){

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
		if(id == 4){
			$('#show-marks').remove();
			$('#show-cgpa').remove();
			$('#show-marks-field').after(
				'<div class="form-group" id="show-cgpa">' +
				'<label class="col-md-4 control-label" for="cgpa">CGPA</label>' +
				'<div class="col-md-3">' +
				'<input class="form-control" name="cgpa" id="cgpa" placeholder="CGPA" type="text">' +
				'</div>' +
				'<label class="col-md-2 control-label" for="scale">Scale</label>' +
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
	* Personal Update Form 
	*/	
	$('#personal-update').on('submit', function(e){
				
		e.preventDefault(e);
		
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

			$('#sepersonal-res').html(res.success); 

			
		}).fail(function(res){
			
			if( res.status === 422 ) {

			$errors = res.responseJSON;

			errorsHtml = '<div class="alert alert-danger"><ol>';

			$.each( $errors, function( key, value ) {
				errorsHtml += '<li>' + value[0] + '</li>'; 
			});
			errorsHtml += '</ol></div>';
				
			$( '#sepersonal-res' ).html( errorsHtml );
			}			
			
			
		});
		
	});
	
	/*
	* Close Personal Update Form 
	*/
	$('#persoanl-btn').click(function() {
		
		location.reload();
		
	});	
	

</script>