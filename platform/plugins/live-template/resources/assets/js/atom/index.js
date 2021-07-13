import { atom } from 'recoil';

const initialState = {
    currentCategoryId: 8
}

export const LIVE_TEMPLATE_STATE = atom({
    key: 'LIVE_TEMPLATE_STATE',
    default: initialState,
});
