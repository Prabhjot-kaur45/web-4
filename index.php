<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Edit Personal Information - PayDude™</title>
    <link rel="stylesheet" href="styles.css"  />
</head>

<body>
    <header>
        <h1>PayDude™</h1>
    </header>
    
    <main>
        <h2>Edit Account Information and Settings</h2>
        <form id="edit_payment_info" action="" method="get">
        <input type="hidden" name="form_sent" value="1" />

           Contact Information
            
            <div>
                <label for="first_name">First Name</label>
                <input id="first_name" type="text" name="first_name" required>

            </div>
           
            <div>
                <label for="last_name">Last Name</label>
                <input id="last_name" type="text" name="last_name" required>

            </div>

            <div>
                <label for="address">Address Line 1</label>
                <input id="address" type="text" name="address" required />
            </div>
          
            <div>
                <label for="province">Province</label>
                <select name="province" id="province">
                <option>Canada</option>
                <option>India</option> 
                </select>
            </div>
        
            <div>
                <label for="phone">Phone Number</label>
                <input id="phone" type="tel" name="phone" required />
            </div>
        
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" required />
            </div>

            <fieldset>
                <legend>Security Settings</legend>
            
                <div>
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required />
                </div>
            
                <div>
                    <label for="profile_photo">Profile Photo</label>
                    <input id="profile_photo" type="file" name="profile_photo" required />
                </div>
            
                <div>
                    <label for="security_questions">Security Question</label>
                    <textarea name="security_questions" id="security_questons" rows="3"></textarea>
                </div>
                
                <fieldset>
                    <legend>Multi-Factor Authentication (MFA)</legend>
                    <input type="radio" name="mfa" id="sms" value="sms" />
                    <label for="sms">Text message (SMS)</label>
                </fieldset>

                <fieldset>Alert Settings
                    <input type="checkbox" name="alert[]" id="alert1" value="push" />
                    <label for="alert1">Push notification (mobile app)</label>
                    <input type="checkbox" name="alert[]" id="alert2" value="email" />
                    <label for="alert2">Email alert</label>
                </fieldset>


            </fieldset>

<div>
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
</div>
        </form>
    </main>
<footer>
        <p><small>©PayDude Inc. All rights reserved</small></p>
</footer>
</body>

</html>