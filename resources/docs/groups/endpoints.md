# Endpoints


## api/user




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/user',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'http://localhost/api/user'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
</form>


## Subscribe to a Topic


This endpoint enables a consumer to subscribe to topic

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/subscribe/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"url":"https:\/\/www.sanford.org\/qui-totam-nihil-similique-non-voluptate-quia"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/v1/subscribe/est',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'url' => 'https://www.sanford.org/qui-totam-nihil-similique-non-voluptate-quia',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/v1/subscribe/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "url": "https:\/\/www.sanford.org\/qui-totam-nihil-similique-non-voluptate-quia"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```python
import requests
import json

url = 'http://localhost/api/v1/subscribe/est'
payload = {
    "url": "https:\/\/www.sanford.org\/qui-totam-nihil-similique-non-voluptate-quia"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


> Example response (400):

```json
{
    "status": "failed",
    "message": "Subscription failed. 'est' is currently unavailable"
}
```
<div id="execution-results-POSTapi-v1-subscribe--topic-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-subscribe--topic-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-subscribe--topic-"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-subscribe--topic-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-subscribe--topic-"></code></pre>
</div>
<form id="form-POSTapi-v1-subscribe--topic-" data-method="POST" data-path="api/v1/subscribe/{topic}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-subscribe--topic-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-subscribe--topic-" onclick="tryItOut('POSTapi-v1-subscribe--topic-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-subscribe--topic-" onclick="cancelTryOut('POSTapi-v1-subscribe--topic-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-subscribe--topic-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/subscribe/{topic}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>topic</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="topic" data-endpoint="POSTapi-v1-subscribe--topic-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>url</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="url" data-endpoint="POSTapi-v1-subscribe--topic-" data-component="body" required  hidden>
<br>
The value must be a valid URL.
</p>

</form>


## Publish Message to a Topic


This endpoint enables a publish to publish message under a specified topic.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/publish/iure" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"body":"[\"iste\",\"magnam\"]"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/v1/publish/iure',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'body' => '["iste","magnam"]',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/v1/publish/iure"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "body": "[\"iste\",\"magnam\"]"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```python
import requests
import json

url = 'http://localhost/api/v1/publish/iure'
payload = {
    "body": "[\"iste\",\"magnam\"]"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "body": [
            "The body must start with: {",
            "The body must end with: }"
        ]
    }
}
```
<div id="execution-results-POSTapi-v1-publish--topic-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-publish--topic-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-publish--topic-"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-publish--topic-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-publish--topic-"></code></pre>
</div>
<form id="form-POSTapi-v1-publish--topic-" data-method="POST" data-path="api/v1/publish/{topic}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-publish--topic-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-publish--topic-" onclick="tryItOut('POSTapi-v1-publish--topic-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-publish--topic-" onclick="cancelTryOut('POSTapi-v1-publish--topic-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-publish--topic-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/publish/{topic}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>topic</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="topic" data-endpoint="POSTapi-v1-publish--topic-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>body</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="body" data-endpoint="POSTapi-v1-publish--topic-" data-component="body" required  hidden>
<br>
The value must be a valid JSON string.
</p>

</form>


## api/v1/{fallbackPlaceholder}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/v1/et',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/api/v1/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```python
import requests
import json

url = 'http://localhost/api/v1/et'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (400):

```json
{
    "status": "failed",
    "message": "URL Not Found. Please check the request url and method"
}
```
<div id="execution-results-GETapi-v1--fallbackPlaceholder-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1--fallbackPlaceholder-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1--fallbackPlaceholder-"></code></pre>
</div>
<div id="execution-error-GETapi-v1--fallbackPlaceholder-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1--fallbackPlaceholder-"></code></pre>
</div>
<form id="form-GETapi-v1--fallbackPlaceholder-" data-method="GET" data-path="api/v1/{fallbackPlaceholder}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1--fallbackPlaceholder-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1--fallbackPlaceholder-" onclick="tryItOut('GETapi-v1--fallbackPlaceholder-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1--fallbackPlaceholder-" onclick="cancelTryOut('GETapi-v1--fallbackPlaceholder-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1--fallbackPlaceholder-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/{fallbackPlaceholder}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>fallbackPlaceholder</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="fallbackPlaceholder" data-endpoint="GETapi-v1--fallbackPlaceholder-" data-component="url" required  hidden>
<br>

</p>
</form>



