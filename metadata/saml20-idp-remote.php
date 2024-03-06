<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */
$metadata['http://www.okta.com/exk1oflbg5g41kq9a1d8'] = [
    'entityid' => 'http://www.okta.com/exk1oflbg5g41kq9a1d8',
    'contacts' => [],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://flinders-sandbox.okta.com/app/flinders-sandbox_elearningstorev2webappsdev01nauthentication_1/exk1oflbg5g41kq9a1d8/sso/saml',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://flinders-sandbox.okta.com/app/flinders-sandbox_elearningstorev2webappsdev01nauthentication_1/exk1oflbg5g41kq9a1d8/sso/saml',
        ],
    ],
    'SingleLogoutService' => [],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
        'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    ],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIDsDCCApigAwIBAgIGAYwzKKADMA0GCSqGSIb3DQEBCwUAMIGYMQswCQYDVQQGEwJVUzETMBEGA1UECAwKQ2FsaWZvcm5pYTEWMBQGA1UEBwwNU2FuIEZyYW5jaXNjbzENMAsGA1UECgwET2t0YTEUMBIGA1UECwwLU1NPUHJvdmlkZXIxGTAXBgNVBAMMEGZsaW5kZXJzLXNhbmRib3gxHDAaBgkqhkiG9w0BCQEWDWluZm9Ab2t0YS5jb20wHhcNMjMxMjA0MDQ0ODA5WhcNMzMxMjA0MDQ0OTA5WjCBmDELMAkGA1UEBhMCVVMxEzARBgNVBAgMCkNhbGlmb3JuaWExFjAUBgNVBAcMDVNhbiBGcmFuY2lzY28xDTALBgNVBAoMBE9rdGExFDASBgNVBAsMC1NTT1Byb3ZpZGVyMRkwFwYDVQQDDBBmbGluZGVycy1zYW5kYm94MRwwGgYJKoZIhvcNAQkBFg1pbmZvQG9rdGEuY29tMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqIUe8PkWI9oQS3ShRp1SmJWqAPVWiHbeXBH9auY+zfwQR6GwU+yLPiS1vmr4xjJxElzoiJlbghr/CVUpAGKgmH5BolghkaQKH8OicjMgq0TiefG1osmTL7tCbKAVIDV8uMSnSpZCj3YvcJIHF+XmOZ6ZgH9b3eZ0uZ2dwd7kyl1+v9QCTX1hoirOP0zDoHjIKWEGmFTzIUlwZgM/UrkR5pXMEUPoXvJuqg2Nu8MLf5LMz9C9ktA0CJ6TQtncsUIJz7+yCSrwjr13p55Lwg5wQ8QBGnp5atsxNmBG+GE9y2xvby/MhTZmhEkZBB0MCUBOen0q3zhsVjhIGT/sOCH9SwIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQB7PRhemKClz5A9Zei5UJGV9iEKSTIlFiIG05RcnBucaoaO0bSuc4PUkhUt6Ya95LBhHwz6ghVIXer2D58dA+vHgLdXh6tDdT4VLNRbNYLIG75vuV3ukUXqNLIpqk40VAhHdy/bmQ3RasMiz23ZmePCOQXYNnCbL3OBOMxUWkMLKJpnoCO6mnGPQc2FwTRPBbCJIvcy5/Th+gLpqHnFpHYrrlFb7E8+PIdqQZYNWUB85ZLhNxbZNjxoSrmJWKsAbNPflAK5HsRwjDbD6LMFGHiNGKOpzJkQGrzMkhfJU1J7bpzlh3hpBTOecO6l+UjsfItvgYrQfmZzJDURenBzJZrI',
        ],
    ],
];
