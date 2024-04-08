<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */
$metadata['http://www.okta.com/exkxvzp6g8rh2nF6Z1t7'] = [
    'entityid' => 'http://www.okta.com/exkxvzp6g8rh2nF6Z1t7',
    'contacts' => [],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://flinders.okta.com/app/flinders_elearningstoreauthehlt_1/exkxvzp6g8rh2nF6Z1t7/sso/saml',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://flinders.okta.com/app/flinders_elearningstoreauthehlt_1/exkxvzp6g8rh2nF6Z1t7/sso/saml',
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
            'X509Certificate' => 'MIIDoDCCAoigAwIBAgIGAY4WJ/K5MA0GCSqGSIb3DQEBCwUAMIGQMQswCQYDVQQGEwJVUzETMBEG A1UECAwKQ2FsaWZvcm5pYTEWMBQGA1UEBwwNU2FuIEZyYW5jaXNjbzENMAsGA1UECgwET2t0YTEU MBIGA1UECwwLU1NPUHJvdmlkZXIxETAPBgNVBAMMCGZsaW5kZXJzMRwwGgYJKoZIhvcNAQkBFg1p bmZvQG9rdGEuY29tMB4XDTI0MDMwNjIzNDQwMFoXDTM0MDMwNjIzNDUwMFowgZAxCzAJBgNVBAYT AlVTMRMwEQYDVQQIDApDYWxpZm9ybmlhMRYwFAYDVQQHDA1TYW4gRnJhbmNpc2NvMQ0wCwYDVQQK DARPa3RhMRQwEgYDVQQLDAtTU09Qcm92aWRlcjERMA8GA1UEAwwIZmxpbmRlcnMxHDAaBgkqhkiG 9w0BCQEWDWluZm9Ab2t0YS5jb20wggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQC7tvPu ujuI91b86b9+kGoT5dPFHh5EWfMgFi/4JSGB7qz37jlMiFxE03Ud/NHEUWm8Wpb5Swt8J9IcLEjl Y6xmWWjfQxhGiUjaUN40tnZrVp4aLuSs6T1Tpwn/nsFmvU9fYhaP5Uhwa7JbwY6zmZ3ADrSRUeFX +C9oOFiZrzw9mZNXx4xAUkLSot6YIwdY2yHUQz9Azdf5T4B0XEG22W0S6X9SyzItbBnlOqTd0yWj IvK41l2aRjLcv3x+ONKh5MUA+A8qPQSKbTl2BbWKm4CTdPpAzUtQmJ0uVZP0ecAXcqAsG20AOhzk ENP1krshttnvQ274YZlEg9W93OTy7QOrAgMBAAEwDQYJKoZIhvcNAQELBQADggEBAJaFdqTDt6XN sxhGLw3hUy03VPu+blvAJD4M+Y9w1XcyYtjtQmmA5pQ7Xkx+HrxqiAJymf1Sk7Ca82mNrXCJKU4d IFr9HqeWegfCXX7vQffEyoyLCNpXv3hFi1Zdk1gEzW5m9f5Eu2hbnPeImUMvkbgtAHsl3aoOlD2v 1EsztauGVz/KbcY0hsuZTyEKhq25NxsspAoB7/ASWxyAv83myxLVisl661DlPe0o5mtoBdWk9DP1 XnNdD65DPzhtquexw8Joh6r/05bQU96P2nWO2tci58KuKpcNMU8Zti2iVBbOS3jfn1uBPxjzTUHm 4X9jLhJXRjeuOBJ9vXbPiQzllyw=',
        ],
    ],
];
