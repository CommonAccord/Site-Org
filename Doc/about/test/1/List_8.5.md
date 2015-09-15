D=[about/test/1/List_8.4.md]

Model.Root={DCBAModel.Root}

1=Wrong

2=Wrong

DCBA3=Three

4=Four

Document=One, Two, Three and Four.

In Document View, this produces the following: <span title='DCBAModel.Root' ><span title='DCBA1' >One</span>, <span title='DCB2' >Two</span>, <span title='DCBA3' >Three</span> and <span title='4' >Four</span>.</span>

Perhaps it should show Model.Root, too.  Not sure.  <span title='Model.Root' ><span title='DCBAModel.Root' ><span title='DCBA1' >One</span>, <span title='DCB2' >Two</span>, <span title='DCBA3' >Three</span> and <span title='4' >Four</span>.</span></span>

For the Wysiwyg functionality each span needs additional information about its source and, following Ludovic's lead, its nesting (depth) in the expansion: e.g. <span title='DCBA3' file='about/test/1/List_2.md' depth='2' >Three</span>

The point is that in order to have this great view, the rendering needs to keep track of where stuff comes from.

