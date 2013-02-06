<h:html xmlns:h="http://www.w3.org/1999/xhtml"
        xmlns="http://www.w3.org/2002/xforms">
<h:head>
 <h:title>Search</h:title>
 <model>
  <submission action="http://example.com/search"
              method="post" xml:id="s"/>
 </model>
</h:head>
<h:body>
 <h:p>
  <input ref="q"><label>Find</label></input>
  <submit submission="s"><label>Go</label></submit>
 </h:p>
</h:body>
</h:html>