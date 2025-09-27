<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <p class="text-white">Welcome to the contact page!</p>
    <p class="text-white">If you have any questions, feel free to reach out to us at <a
            href="mailto:{{ $email }}">{{ $email }}</a>.</p>
    <ul>
        <li>
            <a href="https://www.facebook.com/">Facebook</a>
        </li>
        <li>
            <a href="https://www.twitter.com/">Twitter</a>
        </li>
        <li>
            <a href="https://www.instagram.com/">Instagram</a>
        </li>
    </ul>
</x-layout>
