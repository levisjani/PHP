							if ($usertype=='Administrator')
							{
									  echo('<a href=my_account.php>My Account</a>
									| <a href=survey_category.php>Survey Category</a>
									| <a href="survey.php">Survey</a>
									| <a href="question.php">Question</a> 
									| <a href="results.php">Results</a>  
									| <a href="activate_user.php">Users</a> 
									| <a href="feedback_admin.php">Feedback</a> 
									| <a href="logout.php">Logout</a>');
									
							}
						
							if ($usertype=='Researcher')
							{
									  echo('<a href=my_account.php>My Account</a>
									| <a href=survey_category.php>Survey Category</a>
									| <a href="survey.php">Survey</a>
									| <a href="question.php">Question</a> 
									| <a href="results.php">Results</a>  
									| <a href="edit_profile.php">Edit Profile</a> 
									| <a href="feedback.php">Feedback</a> 
									| <a href="logout.php">Logout</a>');
									
							}
							if ($usertype=='Member')
							{
									  echo('<a href=my_account.php>My Account</a>
									| <a href="start_survey.php">Start Survey</a> 
									| <a href="edit_profile.php">Edit Profile</a> 
									| <a href="feedback.php">Feedback</a> 
									| <a href="logout.php">Logout</a>');
									
							}
