Intro.=[04/Sec/Agt_Intro.04.md]

End.=[04/Sec/Agt_End.04.md]

Attach.=[02/Bit/Attach]
  
/Note=this is a simplified, special case of [02/Bit/Sec]

Model.Root={DocBody}

DocBody={Doc}

Doc=<font color="grey">{MessageToUser}</font><center><h4>{Heading.Sec}</h4></center><br>{sec} 

Heading.Sec={Ti}

sec={Intro.Sec} {xlist} {End.Sec}

xlist={Olist}

Olist=<ol><li>{Secs}</li></ol>

Note=To make blank - could be improved:

null=<b></b>

=[02/Sec/DT_Base.01.md]