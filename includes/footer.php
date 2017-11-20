<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="/styles/style.css" rel="stylesheet"/>
</head>
<body>
   
   <footer class="container-fluid bg-4 text-center">
  <p><z>P</z><la>LA</la><v>N</v><w>T</w><u>r</u> Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p> 
    &copy; <z>P</z><la>LA</la><v>N</v><w>T</w><u>r</u> <?php echo date('Y');?> <br>
    <a href="#" data-toggle="modal" data-target="#privacy">privacy</a>
    <a href="#"  data-toggle="modal" data-target="#terms">terms</a>
    <a href="#"  data-toggle="modal" data-target="#work">work with us</a>
    <a href="#"  data-toggle="modal" data-target="#contact">support</a>
    
    <!-----------------------------FOOTER MODALS--------------------------------------->
    
    <div class="modal fade" id="privacy" role="dialog">
        <div class="modal-dialog">
            <!--contents-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Plantr &copy; Privacy Policy</h4>
                </div>
                
                <div class="modal-body">
                    <p style="font-size:1.3em;">Here at Plantr we respect our users right to privacy.<br>We don't believe in sharing your personal information, such as: </p><br>
                    
                    <ul style="list-style-type:none; margin-left:-2%;">
                        <li>Usernames</li>
                        <li>Real Names</li>
                        <li>Birthdates</li>
                        <li>Posting Habits</li>
                        <li>Other sensitive information</li>
                    </ul>
                    
                    <h4 style="font-size: 1.1em;">That being said, if required to release the information of any user on this site by a law enforcement agency, we reserve the right to release any documents requested and allowed by local or federal laws.</h4>
                </div>
                
                <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="terms" role="dialog">
        <div class="modal-dialog">
            <!--contents-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="margin-left:2%;">Terms Of Service</h4>
                </div>
                
                <div class="modal-body">
                    <p style="font-size: 1.1em;">Plantr was created as a space for people to socialize beyond the typical social media platform setting. We allow our users to interact and express themselves in any way they choose. We do not ban things such as: </p>
                    <hr>
                    <ul style="list-style-type:none; margin-left:-5%;">
                        <li>Artistic Nudity (Not Pornographic Material)</li>
                        <li>Political Expression</li>
                        <li>Religious Expression</li>
                        <li>No matter what.</li>
                    </ul>
                    <hr>
                    
                    <p style="font-size: 1.1em;">At the same time, we are a platform, and must take steps to protect our current and potential users. Plantr does not allow the following under <b>ANY</b> circumstances: </p>
                    <hr>
                    <ul style="list-style-type:none">
                        <li style="color:red;">Pornographic/X-rated material. To put it simply, if it could be found on Pornhub.com, it shouldn't be posted here.</li>
                        <li>Photos, videos or any media depicting underage persons in a sexual context.</li>
                        <li>Threatening content, such as harassing users or hate speech based on religious affiliation, race, sexual orientation, or disability.</li>
                        <li>Extreme violence or any illegal activity</li>
                        <li>Users are not allowed under any circumstances to solicit other users for:<br>Illegal drugs<br>Prostitution<br>Any other illegal activities as stated by local and/or federal laws.</li>
                        <li>You can not post copyrighted material that you do not have permission to distribute unless you make it clear that it's not yours. If you attempt to pass off copyrighted material as yours, we will ask you to simply state that it's not your material. Failure to do this will result in the material being removed. Repeated violation is grounds for account termination.</li>
                    </ul>
                    
                    <figcaption>We reserve the right to remove any content that violates these clear rules. If you feel as though your content has been unfairly removed and/or flagged, you have the right to contact us at Plantr.</figcaption>
                     <figcaption>*Repeated violations is grounds for being blocked from Plantr.
                                 <br>*You must be at least 13 years old to use Plantr! Anyone found to have distributed nudity and/or pornographic materials to minors will be banned from the platform, immediately.
                     </figcaption>
                </div>
                
                <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="work" role="dialog">
        <div class="modal-dialog">
            <!--contents-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ready To Work With  <k style="background-color:black;">  <z>P</z><la>LA</la><v>N</v><w>T</w><u>r</u></k> ? </h4>
                </div>
                
                <div class="modal-body">
                    <p style="font-size: 17px;">Currently, we are not accepting inquiries for employment. <br>Please check back later as we'll update when we are accepting!</p>
                </div>
                
                <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="contact" role="dialog">
        <div class="modal-dialog">
            contents
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">What happened?</h4>
                </div>
                
                <div class="modal-body">
                    <h4 style="font-size: 1.4em;">Something went wrong with your account. Let's see what we can do:</h4>
                    
                    <form>
                        <div class="form-group text-left">
                            <label for="sell">The Problem:</label>
                            <select class="form-control" id="sell">
                                <option>I can't access my account</option>
                                <option>Someone's compromised my account</option>
                                <option>Something on the site is broken(links, graphics, etc.)</option>
                                <option>I can't post anything</option>
                                <option>I can't see any posts</option>
                                <option>I've been blocked</option>
                                <option>My posts have been flagged</option>
                                <option>Someone's harassing me</option>
                                <option>Something else:</option>
                            </select>
                            <br>
                            
                            <label for="comment">Explain further:</label>
                            <textarea class="form-control" rows="4" id="comment" required></textarea>
                            <br>
                            <label for="link">Link to specific issue:</label>
                            <textarea class="form-control" rows="2" id="link" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-success">Submit</button>
                        
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</footer>
    
</body>
</html>