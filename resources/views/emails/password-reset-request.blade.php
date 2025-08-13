@extends('emails.layout')

@section('content')
<h1 style="margin: 0 0 20px 0; font-size: 24px; color: #111827;">
    Reset Your Password
</h1>

<p style="margin: 0 0 20px 0; color: #6b7280;">
    Hi {{ $user->first_name ?? 'there' }},
</p>

<p style="margin: 0 0 20px 0; color: #6b7280;">
    We received a request to reset the password for your MSC Wound Care Platform account. Click the secure link below to create a new password:
</p>

<div style="text-align: center; padding: 30px 0;">
    <a href="{{ $resetLink }}" style="background-color: #1925c3; color: #ffffff; padding: 16px 32px; text-decoration: none; border-radius: 8px; display: inline-block; font-weight: 600; font-size: 16px;">
        Reset My Password
    </a>
</div>

<div style="background-color: #fef3c7; padding: 20px; border-radius: 8px; margin: 20px 0; border-left: 4px solid #f59e0b;">
    <p style="margin: 0; color: #92400e; font-weight: 600;">
        ⏰ This link will expire in 30 minutes
    </p>
    <p style="margin: 10px 0 0 0; color: #92400e; font-size: 14px;">
        For your security, this password reset link will only work for the next 30 minutes. If it expires, you can request a new one.
    </p>
</div>

<p style="margin: 20px 0; color: #6b7280;">
    If you didn't request this reset, you can safely ignore this message. Your password will remain unchanged.
</p>

<div style="background-color: #f9fafb; padding: 20px; border-radius: 8px; margin: 20px 0;">
    <p style="margin: 0 0 10px 0; color: #374151; font-weight: 600;">
        Having trouble with the button?
    </p>
    <p style="margin: 0; color: #6b7280; font-size: 14px;">
        Copy and paste this link into your browser:
    </p>
    <p style="margin: 10px 0 0 0; word-break: break-all; font-size: 12px;">
        <a href="{{ $resetLink }}" style="color: #1925c3;">{{ $resetLink }}</a>
    </p>
</div>

<hr style="border: none; border-top: 1px solid #e5e7eb; margin: 30px 0;">

<p style="margin: 20px 0 0 0; font-size: 14px; color: #9ca3af;">
    For assistance, contact <a href="mailto:support@msc-platform.com" style="color: #1925c3;">support@msc-platform.com</a>.
</p>

<p style="margin: 10px 0 0 0; font-size: 14px; color: #6b7280;">
    Thanks,<br>
    MSC Platform Team
</p>

{!! $trackingPixel !!}
@endsection
</p>

{!! $trackingPixel !!}
@endsection
