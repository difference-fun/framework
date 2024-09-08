{{R3M}}
{{if(config('silence') === true)}}
diffrence.fun silence mode... {{terminal.color('green')}}{{config('framework.version')}}{{terminal.color('reset')}}

{{else}}
Welcome to difference.fun {{terminal.color('green')}}{{config('framework.version')}}{{terminal.color('reset')}}


{{binary()}} bin                            | Creates binary
{{binary()}} cache clear                    | Clears the app cache
{{binary()}} info                           | This info
{{binary()}} info all                       | All info
{{binary()}} license                        | difference_fun/framework license
{{binary()}} password                       | Password hash generation
{{binary()}} uuid                           | Uuid generation
{{binary()}} version                        | Version information
{{/if}}