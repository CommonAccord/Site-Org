Intro.=[Startup/Sec/Agt_Intro.md]

End.=[Startup/Sec/Agt_End.md]

Attach.=[Bit/Attach]
  
Model.Root={DocBody}

DocBody={Doc}

Doc=<font color="grey">{MessageToUser}</font><center><h4>{Heading.Sec}</h4></center><br>{sec} 

Heading.Sec={Ti}

sec={Intro.Sec} {xlist} {End.Sec}

xlist={Olist}

Olist=<ol><li>{Secs}</li></ol>

Note=To make blank - could be improved:

null=<b></b>

=[Startup/Sec/DT_Base.md]