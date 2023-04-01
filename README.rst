OSSO build of uwsgi-plugin-php (Ubuntu/Jammy)
=============================================

*What?*

``uwsgi-plugin-php_2.0.20+4+0.0.15-0osso0+ubu22.04_amd64.deb``

*Why?*

`LP#1960356
<https://bugs.launchpad.net/ubuntu/+source/uwsgi-plugin-php/+bug/1960356>`_
removed ``uwsgi-plugin-php`` from *Ubuntu/Jammy*. It was reinstated in
*Ubuntu/Lunar*. This project builds the package for *Ubuntu/Jammy* using
the ``0.0.15`` plugin build found in *Ubuntu/Lunar*.

In `Q#703492
<https://answers.launchpad.net/ubuntu/+source/uwsgi-plugin-php/+question/703492>`_
it is explained that the project works now, but it will not be added to
*Ubuntu/Jammy* for policy reasons.

*How?*

Using Docker::

    ./Dockerfile.build

If the build succeeds, the built Debian packages are placed inside (a
subdirectory of) ``Dockerfile.out/``.

*Changes*

The only change made, is a revert of `cfa5fe64
<https://salsa.debian.org/uwsgi-team/uwsgi-plugin-php/-/commit/cfa5fe64342582cc8c68db7b6cedd850cd77f7b6>`_
because ``dh-sequence-uwsgi`` is not available in *Ubuntu/Jammy*.
