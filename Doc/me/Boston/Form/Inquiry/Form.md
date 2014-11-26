Model.Root={Intake.DocBody}

Intake.DocBody=<b>{Head}</b><br><br><ol><li>{Client.Sec}</li><li>{Project.Sec}</li></ol>

Head={LH}<br>{Ti}

LH=Office of Business Development/Boston Main Street

Ti=Boston Business Hub<br>Submit an Inquiry:



Client.Sec=<b>Client:</b><ul><li><b>First Name:</b>  {Client.Name.First}</li><li><b>Last Name:</b> {Client.Name.Last}</li><li><b>Phone:</b> {Client.Phone.Fixed}</li><li><b>Mobile:</b> {Client.Phone.Mobile}</li><li><b>Email:</b> {Client.Email}</li></li></ul>

Project.Sec=<b>Project:</b><ul><li><b>Name:</b> {Project.Name}</li><li><b>Sector:</b>  {Project.Sector}</li><li><b>Neighborhood:</b>  {Project.Neighborhood}</li><li><b>Assistance:</b><ol><li><b>Type:</b>  {Project.Assistance}<li><b>Subject:</b> {Project.Assistance.Subject}<li><b>Description: </b> {Project.Assistance.Description}</ol></ol>

Project.Sector=<b>Choose .. e.g., {Project.Sector.3 }</b> {Project.Sector } {Sector.List}
Note/Sectors=List of valid sectors

Sector.=[/me/Boston/List/Sector.md]

Project.Neighborhood=<b>Choose .. e.g., {Neighborhood.Sector.3 }</b> {Neighborhood.Sector } {Neighborhood.List}
Neighborhood.=[/me/Boston/List/Neighborhood.md]
Project.Assistance=<b>Choose .. e.g., {Assistance.Sector.3 }</b> {Assistance.Sector } {Assistance.List}
Assistance.=[/me/Boston/List/Assistance.md]


mcolor=magenta