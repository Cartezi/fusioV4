
# /backend/app


## GET


### GET Response - 200 OK

<div id="psx_model_Collection" class="psx-object"><h4>collection</h4><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"totalResults"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"startIndex"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"entry"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Array (Object (<a href="#psx_model_App" title="RFC4648">app</a>))</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">totalResults</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">startIndex</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">entry</span></td><td><span class="psx-property-type">Array (Object (<a href="#psx_model_App" title="RFC4648">app</a>))</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>
<div id="psx_model_App" class="psx-object"><h4>app</h4><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"id"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"userId"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"status"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"name"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"url"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"parameters"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"appKey"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"appSecret"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"date"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type"><a href="http://tools.ietf.org/html/rfc3339#section-5.6" title="RFC4648">DateTime</a></span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"scopes"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Array (String)</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"tokens"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Array (Object (<a href="#psx_model_Token" title="RFC4648">token</a>))</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">id</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">userId</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">status</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">name</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div><dl class="psx-property-constraint"><dt>Pattern</dt><dd><span class="psx-constraint-pattern">[a-zA-Z0-9\-\_]{3,64}</span></dd></dl></td></tr><tr><td><span class="psx-property-name psx-property-optional">url</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">parameters</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">appKey</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">appSecret</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">date</span></td><td><span class="psx-property-type"><a href="http://tools.ietf.org/html/rfc3339#section-5.6" title="RFC4648">DateTime</a></span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">scopes</span></td><td><span class="psx-property-type">Array (String)</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">tokens</span></td><td><span class="psx-property-type">Array (Object (<a href="#psx_model_Token" title="RFC4648">token</a>))</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>
<div id="psx_model_Token" class="psx-object"><h4>token</h4><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"id"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"token"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"scope"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"ip"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"expire"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type"><a href="http://tools.ietf.org/html/rfc3339#section-5.6" title="RFC4648">DateTime</a></span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"date"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type"><a href="http://tools.ietf.org/html/rfc3339#section-5.6" title="RFC4648">DateTime</a></span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">id</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">token</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">scope</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">ip</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">expire</span></td><td><span class="psx-property-type"><a href="http://tools.ietf.org/html/rfc3339#section-5.6" title="RFC4648">DateTime</a></span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">date</span></td><td><span class="psx-property-type"><a href="http://tools.ietf.org/html/rfc3339#section-5.6" title="RFC4648">DateTime</a></span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>

## POST


### POST Request

<div id="psx_model_App" class="psx-object"><h4>app</h4><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"id"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"userId"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"status"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"name"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"url"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"parameters"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"appKey"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"appSecret"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"date"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type"><a href="http://tools.ietf.org/html/rfc3339#section-5.6" title="RFC4648">DateTime</a></span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"scopes"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Array (String)</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"tokens"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Array (Object (<a href="#psx_model_Token" title="RFC4648">token</a>))</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">id</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-required">userId</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">status</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-required">name</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div><dl class="psx-property-constraint"><dt>Pattern</dt><dd><span class="psx-constraint-pattern">[a-zA-Z0-9\-\_]{3,64}</span></dd></dl></td></tr><tr><td><span class="psx-property-name psx-property-required">url</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">parameters</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">appKey</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">appSecret</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">date</span></td><td><span class="psx-property-type"><a href="http://tools.ietf.org/html/rfc3339#section-5.6" title="RFC4648">DateTime</a></span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-required">scopes</span></td><td><span class="psx-property-type">Array (String)</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">tokens</span></td><td><span class="psx-property-type">Array (Object (<a href="#psx_model_Token" title="RFC4648">token</a>))</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>
<div id="psx_model_Token" class="psx-object"><h4>token</h4><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"id"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Integer</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"token"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"scope"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"ip"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"expire"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type"><a href="http://tools.ietf.org/html/rfc3339#section-5.6" title="RFC4648">DateTime</a></span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"date"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type"><a href="http://tools.ietf.org/html/rfc3339#section-5.6" title="RFC4648">DateTime</a></span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">id</span></td><td><span class="psx-property-type">Integer</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">token</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">scope</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">ip</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">expire</span></td><td><span class="psx-property-type"><a href="http://tools.ietf.org/html/rfc3339#section-5.6" title="RFC4648">DateTime</a></span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">date</span></td><td><span class="psx-property-type"><a href="http://tools.ietf.org/html/rfc3339#section-5.6" title="RFC4648">DateTime</a></span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>

### POST Response - 201 Created

<div id="psx_model_Message" class="psx-object"><h4>message</h4><pre class="psx-object-json"><span class="psx-object-json-pun">{</span>
  <span class="psx-object-json-key">"success"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">Boolean</span><span class="psx-object-json-pun">,</span>
  <span class="psx-object-json-key">"message"</span><span class="psx-object-json-pun">: </span><span class="psx-property-type">String</span><span class="psx-object-json-pun">,</span>
<span class="psx-object-json-pun">}</span></pre><table class="table psx-object-properties"><colgroup><col width="30%" /><col width="70%" /></colgroup><thead><tr><th>Field</th><th>Description</th></tr></thead><tbody><tr><td><span class="psx-property-name psx-property-optional">success</span></td><td><span class="psx-property-type">Boolean</span><br /><div class="psx-property-description"></div></td></tr><tr><td><span class="psx-property-name psx-property-optional">message</span></td><td><span class="psx-property-type">String</span><br /><div class="psx-property-description"></div></td></tr></tbody></table></div>