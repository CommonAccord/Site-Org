Model.Root={Intake.DocBody}

Intake.DocBody=<b>{Head}</b><br><br><ol><li>{Client.Sec}</li><li>{Project.Sec}</li><li>{Business.Sec}</li></ol>

Head={LH}<br>{Ti}

LH=Office of Business Development/Boston Main Street

Ti=Boston Business Hub<br>Submit an Inquiry:



Client.Sec=<b>Client:</b><ul><li><b>First Name:</b>  {Client.Name.First}</li><li><b>Last Name:</b> {Client.Name.Last}</li><li><b>Phone:</b> {Client.Phone.Fixed}</li><li><b>Mobile:</b> {Client.Phone.Mobile}</li><li><b>Email:</b> {Client.Email}</li></li></ul>

Project.Sec=<b>Project:</b><ul><li><b>Name:</b> {Project.Name}</li><li><b>Sector:</b>  {Project.Sector}</li><li><b>Address</b><ol><li><b>Number, Street, Suite:</b> {Project.Addr.1}</li><li><b>Zip:</b> {Project.Addr.Zip}</li></ol></ul>


Project.Sector=<b>Choose .. e.g., {Project.Sector.3 }</b> {Project.Sector } {Sector.List}
mcolor=magenta

Note/Sectors=List of valid sectors

Sector.=[/me/Boston/Form/Sector.md]