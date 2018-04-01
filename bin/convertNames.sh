#!/bin/bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

VARIABLES_PATH="${DIR}/../assets/web-fonts-with-css/scss/_variables.scss"

RESULT_PATH="${DIR}/result.txt"

echo '' > "${RESULT_PATH}"

while IFS='' read -r line || [[ -n "$line" ]]; do
    if [[ ${line} =~ fa\-var\-([a-z0-9\-]+): ]]
    then
        iconName=${BASH_REMATCH[1]}
        upperIconName=`echo ${iconName} | tr /a-z/ /A-Z/`
        upperIconName=$(echo ${upperIconName} | sed 's/-/_/g')

        echo "const _${upperIconName} = '${iconName}';" >> "${RESULT_PATH}"
    fi
done < "${VARIABLES_PATH}"

echo "Done. See result in ${RESULT_PATH}";
